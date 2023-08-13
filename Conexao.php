<?php 

class conexao {

    public static $instance;

    public static function getConexão() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=localhost;dbname=thiago_exemplo", "root", "");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return self::$instance;
        }
    }
}

?>