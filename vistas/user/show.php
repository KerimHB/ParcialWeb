<?php
require_once("/xampp/htdocs/unicaes/vistas/head/head.php");
require_once("/xampp/htdocs/unicaes/controladores/usercontroller.php");

$obj = new userController();
$date = $obj->Show($_GET['id']);
?>

<div class="text-center text-white bg-dark">
    <h2>Detalles del registro</h2>
</div>

<div class="container pb-3">
    <a href="index.php" class="btn btn-outline-dark">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-outline-success">Actualizar</a>
    <!-- Button trigger modal -->
    <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado el registro no se podra recuperar
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="container text-center">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Insc Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">
                    <?= $date[0]?>
                </td>
                <td scope="col">
                    <?= $date[1]?>
                </td>
                <td scope="col">
                    <?= $date[3]?>
                </td>
                <td scope="col">
                    <?= $date[4]?>
                </td>
                <td scope="col">
                    <?= $date[5]?>
                </td>
            </tr>
        </tbody>

    </table>
</div>

<?php
require_once("/xampp/htdocs/unicaes/vistas/head/footer.php");
?>