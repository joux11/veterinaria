<?php
require_once 'Models/cls_Login.php';
session_start();

class Login{
    
    
    private $views;
    private $login;
    public function __construct() {
        $this->views = new Views();
        $this->login = new LoginModel();
    }
    
    
    public function login($params){
       
        
        $this->views->getView($this,"login");
        
    }
    
    public function getUsers(){
        if($_POST){
            if(empty($_POST['txtEmail'] || empty($_POST['txtPassword']))){
                $response = array('status' => false, "msg"=>"Error en los datos");
            }else{
                $result = $this->login->loginUser($_POST['txtEmail'],$_POST['txtPassword']);
                if(empty($result)){
                    $response = array('status' => false, 'msg' => 'El usuario o la contraseña es incorrecto.');
                }else{
                    $_SESSION['correo'] = $result['correo'];
                    $_SESSION['idveterinario'] = $result['idveterinario'];
                    $_SESSION['nombre'] = $result['nombre'];
                    $_SESSION['apellido'] = $result['apellido'];
                    $_SESSION['rol_id'] = $result['rol_id'];

                    $response = array('status' => true, 'msg' => 'Bienvenido');

                }
            }
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
        }
    }
    /*
    public function logout(){
        

        // Destruir todas las variables de sesión
        session_unset();
        // Destruir la sesión
        session_destroy();
        
        header("Location: veterinaria");
    }*/
}
