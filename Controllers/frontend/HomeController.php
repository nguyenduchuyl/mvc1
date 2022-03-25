<?php

require_once('Controllers/Controller.php');

require_once('Models/frontend/Category.php');
require_once ('libs/Validator.php');
require_once ('Models/frontend/User.php');

class HomeController extends Controller{

    public function __construct(){
        parent::__construct();

    }
    public function index(){
        $_SESSION['save'] = '1';
        return $this->view('frontend/index');
    }

    public function shop(){

        return $this->view('frontend/shop');
    }
    public function detail(){

        return $this->view('frontend/detail');
    }
    public function cart(){

        return $this->view('frontend/cart');
    }
    public function check(){

        return $this->view('frontend/checkout');
    }
}