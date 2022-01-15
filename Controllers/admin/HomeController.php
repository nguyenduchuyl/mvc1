<?php

    require_once('Controllers/Controller.php');


    class HomeController extends Controller
    {
        public function __construct(){
            parent::__construct();
        }

        public function index(){

            return $this->view('admin/index');
        }
        public function bill(){

            return $this->view('admin/bill');
        }
        public function product(){

            return $this->view('admin/product');
        }
        public function account(){

            return $this->view('admin/account');
        }
    }