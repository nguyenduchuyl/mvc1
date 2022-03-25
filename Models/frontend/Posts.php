<?php
require_once ('Models/Model.php');

class Posts extends Model {
    protected $table = 'posts';
    protected $attributes = [
        'category_id',
        'name',
        'content',
        'slug',
        'publish_date',
        'author_id'
    ];

    public function __construct($data = [])
    {

        parent::__construct($data);
    }
    public function getContentWith3Dots($string){
        if(strlen($string)>100){
            $string = substr($string,0,100);
            $string = $string." ...";
        }
        return $string;
    }
}