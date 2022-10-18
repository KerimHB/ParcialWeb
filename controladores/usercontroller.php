<?php

class userController{
    private $model;
    public function __construct()
    {
        require_once("/xampp/htdocs/unicaes/modelos/usermodel.php");
        $this->model = new userModel();
    }

    public function guardar($username, $password, $email, $direction){
        $id = $this->model->Insertar($username, $password, $email, $direction);
        return ($id!=false) ? header("Location: show.php?id=".$id) : header("Location: create.php");
    }

    public function Show($id){
        return($this->model->Show($id) != false) ? $this->model->Show( $id) : header('Location:index.php');
    }

    public function Index(){
        return ($this->model->Index()) ? $this->model->Index() : false;
    }

    public function Update($id, $username, $userpass, $email, $direction){
        return ($this->model->Update($id, $username, $userpass, $email, $direction) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
    }

    public function Delete($id){
        return ($this->model->Delete($id)) ? header("Location:index.php") : header("Location:show.php?=".$id);
    }

    public function ingresoUsuarioControlador(){

        if(isset($_POST["username"])){

            $datosControlador = array(  "username" => $_POST["username"],
                                        "userpass" => $_POST["userpass"],
                                    );

            $respuesta = $this->model->ingresoUsuarioModelo($datosControlador,"usuarios");
            

            if($respuesta["username"]==$_POST["username"] && $respuesta["userpass"]==$_POST["userpass"]){

                @session_start();
                
                $_SESSION["validar"] = true;
                
                header("location:index.php");

            }else{

                header("location:../../index.php");
            }
        }

    }
}

?>