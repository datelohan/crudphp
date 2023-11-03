<?php
namespace Lohan\Estdosphp\app\models;

class conexao {
    private static $instance ;

    public static function getCon(){
        if(!isset(self::$instance)):
            self::$instance = new \PDO("mysql:host=localhost;dbname=test;charset=utf8","root","");
        endif;
        return self::$instance;
    }
}
print_r("LOHAN BURRO");