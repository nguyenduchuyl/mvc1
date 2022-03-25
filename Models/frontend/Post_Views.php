<?php
require_once 'Models/Model.php';

class Post_Views extends Model {
    protected $table = 'post';
    protected $attributes = [
       'post_id',
        'user_id',
        'ip'
    ];

    public function __construct($data = [])
    {

        parent::__construct($data);
    }
}