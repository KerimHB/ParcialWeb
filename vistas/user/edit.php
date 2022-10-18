<?php
require_once("/xampp/htdocs/unicaes/vistas/head/head.php");
require_once("/xampp/htdocs/unicaes/controladores/usercontroller.php");

$obj = new userController();
$user = $obj->Show($_GET['id']);
?>

<form action="update.php" method="POST" autocomplete="off">
    <div class="container text-center bg-dark">
        <h2 class="text-white">Modificando</h2>
        <div class="mb-3 row ">
            <label class="col-sm-2 col-form-label text-white">Id</label>
            <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext text-white" id="staticEmail" value="<?= $user[0] ?>">
            </div>
        </div>
        <div class="form-outline form-white mb-4">
            <input type="text" name="username" required placeholder="Nombre de Usuario"
                class="form-control form-control-lg" value="<?= $user[1] ?>"/>
            <label class="form-label">Nombre de usuario</label>
        </div>

        <div class="form-outline form-white mb-4">
            <input type="password" name="userpass" required placeholder="Contraseña"
                class="form-control form-control-lg" value="<?= $user[2] ?>" />
            <label class="form-label">Contraseña </label>
        </div>

        <div class="form-outline form-white mb-4">
            <input type="email" name="email" required placeholder="Emal" class="form-control form-control-lg"  value="<?= $user[3] ?>"/>
            <label class="form-label">Email</label>
        </div>


        <div class="form-outline form-white mb-4">
            <input type="text" name="direction" required placeholder="Dirección" class="form-control form-control-lg" value="<?= $user[4] ?>" />
            <label class="form-label">Dirección</label>
        </div>

        <div>
        <button class="btn btn-outline-light btn-lg px-5" type="submit">Actualizar</button>
        <br><br>
        <a class="btn btn-outline-danger btn-lg px-5" href="show.php?id=<?= $user[0] ?>">Cancelar</a>
        </div>
        <br>

    </div>


</form>
<?php
require_once("/xampp/htdocs/unicaes/vistas/head/footer.php");
?>