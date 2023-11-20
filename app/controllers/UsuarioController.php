<?php
require_once 'app/models/PeliculasModel.php';
require_once 'app/views/PeliculasView.php';
require_once 'app/models/UsuarioModel.php';
//require_once 'app/views/UsuarioView.php';
require_once './helpers/Auth.Helper.php';
define('HOME', '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . '/login');

class UsuarioController{
    private $peliModel;
    private $peliView;
    private $usuarioModel;
    //private $usuarioView;
    private $helper;
    public function __construct() {

        $this->peliModel = new PeliculasModel();
        $this->peliView = new PeliculasView();
        $this->usuarioModel = new UsuarioModel();        
        //$this->usuarioView = new UsuarioView();
        $this->helper = new Helper();
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }

   public function showAdmin(){
    $this->helper->checkLoggedIn();
    $genero = $this->peliModel->getGenero();
    $this->peliView->adminPanel($genero);   
        //$this->usuarioView->menuAdministrador();
    }

    public function register(){
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $password = $_POST['contrasenia'];
        
        if (isset($usuario) && isset($email)&& isset($password)){
            if (!empty($usuario) && !empty($email)&& !empty($password)){ 
            $hash = password_hash($password,PASSWORD_DEFAULT);             
            $this->usuarioModel->crearUsuario($usuario,$email,$hash);
            echo('Te has registrado con exito');
            header("Location: home");  
            }else{
                echo('Parametro invalido');
               //error los parametros ingresados no son validos 
            }
        }else{
            echo('Error');
            //Error debe ingresar valores para registrarse correctamente
        }
        

       
    }

    public function login(){
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST["contrasenia"];
        $verificarDatos=$this->usuarioModel->verificarUsuario($usuario);//Hace una consulta a la base de datos para encontrar el usuario ingresado
        if(!empty($verificarDatos)){
            echo ('ok');
            var_dump($verificarDatos);
            var_dump(password_verify($contrasenia,$verificarDatos->contrasenia));
         if (password_verify($contrasenia,$verificarDatos->contrasenia)){
            echo('ok2');
            //Este if nos verifica que haya un usuario en la base de datos igual al usuario ingresado por nuestro cliente
            $this->helper->login($verificarDatos);
            header("Location: adminPanel");
         }
    
        }else{
            //$this->usuarioView->showError();
            echo ('Login incorrecto');
        }

    }

    public function logout(){
        $this->helper->logout();
        header("Location: home");
    }
}    
?>