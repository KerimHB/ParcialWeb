<?php

class Database
{
            private $host = "localhost";
            private $port = "5432";
            private $dbname = "parcialWeb";
            private $user = "postgres";
            private $password = "123456";
    public function Conexion(){
        try {
            
            $conexions = "pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;";
            $PDO = new PDO($conexions, $this->user, $this->password);
            return $PDO;
        }
        catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}

?>