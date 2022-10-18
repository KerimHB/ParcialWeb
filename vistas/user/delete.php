<?php
    require_once("/xampp/htdocs/unicaes/controladores/usercontroller.php");
    $obj = new userController();
    $obj->Delete($_GET['id'])
?>