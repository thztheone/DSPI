<?php

class Control {
    
    public $loginIndex = false;
     
    public function index() {
        
        if ($_SERVER["REQUEST_METHOD"]) == "POST") {
           
            if (isset($_POST["email"])) {
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $usuario = new Usuario();
                
                $this->$loginIndex = $usuario->validarUsuario($email, $senha);
                
                if ($loginIndex == 1) {
                    header('location:home.php');
                    exit;
                } else {
                    $this->loginIndex = "Dados inválidos";
            }
        }
    }  
}
