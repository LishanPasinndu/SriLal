<?php

Class X{

    public static $dbms;

    public static function c(){
        X::$dbms = new mysqli("localhost","root","Lishan#12345","srilal","3306");
    }

    public static function iud($q){
        X::c();
        X::$dbms->query($q);
    }
    
    public static function s($q){
        X::c();
        $resultset = X::$dbms->query($q);
        return $resultset;
    }

}


?>