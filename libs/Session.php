<?php

class Session{


    public static function getFile(){

        return fopen('session/'.session_id().'.txt', "w");
    }

    public static function getAll(){
        $lines =  file('session/'.session_id().'.txt');

        if(!isset($lines[0])){
            return [];
        }

        return (array) json_decode($lines[0]);
    }


    public static function get($key){

        $data = Session::getAll();

        return isset($data[$key]) ? $data[$key] : null;
    }

    public static function set($key,$value){
        $data = Session::getAll();
        $data[$key] = $value;

        $data = json_encode($data);

        $file = Session::getFile();
        fwrite($file, $data);
        fclose($file);
        return $value;
    }

    public static function forget($key){

        $data = Session::getAll();
        if(!isset($data[$key])){
            return true;
        }

        unset($data[$key]);
        $data = json_encode($data);

        $file = Session::getFile();
        fwrite($file, $data);
        fclose($file);

        return true;
    }

    public static function clear(){
        unlink('session/'.session_id());
    }

}