<?php

// datos de coneccion

class DB{

static $host="localhost";
static $user="root";
static $password="";
static $db="personas";


    public static function init(){
 echo "Iniciando baese de datos";
    }

public static function query($sql){
   //$con= new mysqli('localhost','root','','personas');
    $con =new mysqli(self::$host,self::$user,self::$password,self::$db);

    return $con->query($sql);
}
}
?>