<?php
require_once('Controllers/Controller.php');

class LoginController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        return $this->view('admin/login');
    }
    public function login_admin(){
        return $this->view('admin/index');
    }
    public function logout(){

        return $this->view('admin/login');
    }

}