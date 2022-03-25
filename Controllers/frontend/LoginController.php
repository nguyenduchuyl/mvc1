<?php
require_once('Controllers/Controller.php');
require_once('Models/frontend/User.php');
require_once('libs/Validator.php');
require_once('Repositories/Authenticate.php');
require_once('Repositories/UserRepository.php');
class LoginController extends Controller
{
    protected $userRepository;
    protected $authenticate;


    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->authenticate = new Authenticate();
    }

    public function showLogin(){

        if(Auth::checkAuth()){
            return $this->redirect(Route::name('index'));
        }

        $_SESSION['test_session'] = 'TEST SESSION';
        return $this->view('frontend/auth/login');
    }
    public function login()
    {

        $validate = Validator::validateEmpty($this->data, [
            'username','password'
        ]);
        $_SESSION['test_session_2'] = 'TEST SESSION 2';

        if(!$validate['valid']){
            return $this->response([
                'message' => $validate['message']
            ]);
        }

        $loginResult = $this->authenticate->login($this->data['username'], $this->data['password']);
        if(!$loginResult){
            return $this->response([
                'message' => 'Username or password is notcorect'
            ]);
        }

        return $this->redirect(Route::name('index'));
    }

    public function editProfile(){
        $user = Auth::user();
        return $this->view('frontend/profile',compact('user'));
    }

    public function updateProfile(){

        $user = Auth::user();

        // TODO SOMETHING validate data
        $names = $this->userRepository->analysisName($this->data['fullname']);
        $this->data = array_merge($this->data, $names);

        $user = $this->userRepository->updateUser($user, $this->data);
        Auth::setUser($user);

        return $this->editProfile();
    }

    public function logout(){

        Auth::logout();

        return $this->redirect(Route::name('auth.show-login'));

    }


    public function register()
    {

        $validate = Validator::validateEmpty($this->data, [
            'username','password','re_password','fullname','email','date_of_birth'
        ]);

        if(!$validate['valid']){
            return $this->response([
                'message' => $validate['message']
            ]);
        }
        // tạo tài khoản
        $user = $this->userRepository->createUser($this->data);
        dump($user);
        // chuyển trang sửa thông tin người dùng
        // kèm báo luôn kết quả : bạn đã tạo người dùng thành công

        return $this->redirect(Route::name('users.edit',['user_id' => $user->id]));

    }

    public function checkUsername(){

        $users = (new User())->getList(["username='{$this->data['username']}'"]);

        if(count($users) == 0){
            return $this->response(['valid' => true]);
        }

        return $this->response(['valid' => false]);
            ///day bi loi


    }
}