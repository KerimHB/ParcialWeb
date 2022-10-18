<?php
require_once("/xampp/htdocs/unicaes/controladores/usercontroller.php");

$obj = new userController();
$obj->Update($_POST['id'], $_POST['username'], $_POST['userpass'], $_POST['email'], $_POST['direction'])
?>