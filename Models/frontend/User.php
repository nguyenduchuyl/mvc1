<?php
require_once('Models/Model.php');

class User extends Model{

    protected $table = 'user';

    protected $defaul_avatar = 'public/avatar/NOIMAGE.jpg';

    protected $attributes = [
        'username',
        'password',
        'date_of_birth',
        'first_name',
        'middle_name',
        'last_name',
        'mail',
        'phone_number',
        'address',
        'avatar'



    ];
    public function __construct($data = [])
    {
        parent::__construct($data);
    }

    public function getFullName(){
        return $this->first_name.' '.$this->middle_name.' '.$this->last_name;
    }

    public function getAvatar(){

        if(is_null($this->avatar) || trim($this->avatar) !==  '' || !file_exists($this->avatar)){
            return asset($this->defaul_avatar);
        }

        return asset($this->avatar);
    }
}