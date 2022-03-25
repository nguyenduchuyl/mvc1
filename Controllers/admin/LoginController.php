<?php
require_once('Controllers/Controller.php');
require_once ('Models/frontend/Category.php');
require_once('Repositories/CategoryRepository.php');
require_once ('Models/frontend/User.php');

class LoginController extends Controller{

    protected $repository;
    public function __construct(){
        parent::__construct();
        $this->repository= new CategoryRepository();
    }

    public function index(){
        $post_cate = $this->repository->getAllPostCate();
        return $this->view('admin/login',compact('post_cate') );
    }
    public function login_admin(){
        return $this->view('admin/index');
    }
    public function logout(){

        return $this->view('admin/login');
    }

}