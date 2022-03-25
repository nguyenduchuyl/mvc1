<?php
require_once('Controllers/Controller.php');
require_once('Repositories/UserRepository.php');
require_once('Models/frontend/User.php');
require_once ('libs/Validator.php');
require_once ('Models/frontend/Category.php');
require_once('Repositories/CategoryRepository.php');
class UsersController extends Controller
{

    protected $repository;
    protected $repository1;
    public function __construct(){
        parent::__construct();
        $this->repository = new UserRepository();
        $this->repository1 = new CategoryRepository();
    }

    public function index(){

        $users = $this->repository->getAllUser();
        $post_cate = $this->repository1->getAllPostCate();
        return $this->view('admin/user/index', compact('users','post_cate'));
    }
    public function showFormEdit(){
        $user = (new User())->find($this->data['user_id']);

        if(is_null($user)){
            return $this->response([
                'message' => 'User not found'
            ]);
        }

        return $this->view('admin/user/edit-user',compact('user'));
    }



    public function delete(){
        $user = (new User())->find($this->data['user_id']);

        if(is_null($user)){
            return $this->response([
                'code'    => 404,
                'message' => 'User not found'
            ]);
        }

        $user->delete();
        return $this->response([
            'code'    => 200,
            'message' => 'Delete Successfully'
        ]);
    }
    public function editUser(){
        $user = (new User())->find($this->data['id']);
        if(is_null($user)){
            return $this->response([
                'code'    => 404,
                'message' => 'User not found'
            ]);
        }


        //TODO SOMETHING: validate data
        $name=$this->repository->analysisName($this->data['fullname']);
        // nối mảng
        $this->data=array_merge($this->data,$name);

        $user=$this->repository->updateUser($user, $this->data);
        //dd($user);

        return $this->response([
           'code' => 200,
           'message' => 'Edit successfully'
        ]);
    }
    public function createUser(){


        $user=$this->repository->createUser1($this->data) ;

          return $this->response([
            'code' => 200,
            'message' => 'Create successfully'
           ]);
    }



}