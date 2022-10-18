<?php

class userModel
{
    private $PDO;
    public function __construct()
    {
        require_once('/xampp/htdocs/unicaes/config/conexion.php');
        $con = new Database();
        $this->PDO = $con->Conexion();
    }

    public function Insertar($username, $userpass, $email, $direction)
    {
        //$stmt = $this->PDO->query("INSERT INTO usuarios VALUES(not null,':username', ':userpass', ':email', ':direction', CURRENT_DATE);");
        $sqlquery = 'INSERT INTO usuarios(username, userpass, email, direction, ins_date) VALUES(:username, :userpass, :email, :direction, CURRENT_DATE);';
        $stmt = $this->PDO->prepare($sqlquery);
        $stmt->bindValue(":username", $username);
        $stmt->bindValue(":userpass", $userpass);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":direction", $direction);
        return ($stmt->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function Show($id)
    {
        $sqlquery = 'SELECT * FROM usuarios WHERE id_user = :id limit 1';
        $stmt = $this->PDO->prepare($sqlquery);
        $stmt->bindValue(":id", $id);
        return ($stmt->execute()) ? $stmt->fetch() : false;
    }

    public function Index()
    {
        $sqlquery = 'SELECT * FROM usuarios';
        $stmt = $this->PDO->prepare($sqlquery);
        return ($stmt->execute()) ? $stmt->fetchAll() : false;
    }

    public function Update($id, $username, $userpass, $email, $direction)
    {
        $sqlquery = 'UPDATE usuarios SET username = :username, userpass = :userpass, email = :email, direction = :direction WHERE id_user = :id';
        $stmt = $this->PDO->prepare($sqlquery);
        $stmt->bindValue(":username", $username);
        $stmt->bindValue(":userpass", $userpass);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":direction", $direction);
        $stmt->bindValue(":id", $id);
        return ($stmt->execute()) ? $id : false;
    }

    public function Delete($id)
    {
        $sqlquery = 'DELETE FROM usuarios WHERE id_user = :id';
        $stmt = $this->PDO->prepare($sqlquery);
        $stmt->bindValue(":id", $id);
        return ($stmt->execute()) ? true : false;
    }
    public function ingresoUsuarioModelo($datosModelo){
        $sqlquery = "SELECT username, userpass FROM usuarios WHERE username = :username";
        $stmt = $this->PDO->prepare($sqlquery);
        $stmt->bindParam(":usuario",$datosModelo["usuario"],PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

    }
}

?>