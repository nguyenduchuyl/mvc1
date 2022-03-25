<?php
require_once('Controllers/Controller.php');
require_once('Models/frontend/User.php');
require_once ('libs/Validator.php');
class PostViewsController extends Controller
{

    protected $repository;

    public function __construct()
    {
        parent::__construct();

    }


}