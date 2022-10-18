<?php
require_once("/xampp/htdocs/unicaes/vistas/head/head.php");

require_once("/xampp/htdocs/unicaes/controladores/usercontroller.php");

$obj = new userController();
$rows = $obj->Index();
?>
<div class="text-center text-white bg-dark">
    <h2>Usuarios</h2>
</div>
<div class="container mb-3">
    <a href="/unicaes/vistas/user/create.php" class="btn btn-outline-dark">Agregar usuario nuevo</a>
</div>
<div class="container text-center">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Dirección</th>
                <th scope="col">Insc Date</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <th>
                            <?= $row[0]?>
                        </th>
                        <th>
                            <?= $row[1]?>
                        </th>
                        <th>
                            <?= $row[3]?>
                        </th>
                        <th>
                            <?= $row[4]?>
                        </th>
                        <th>
                            <?= $row[5]?>
                        </th>
                        <th>
                            <a href="show.php?id=<?= $row[0]?>" class="btn btn-outline-dark">Ver</a>
                            <a href="edit.php?id=<?= $row[0]?>" class="btn btn-outline-info">Editar</a>

                            <!-- Button trigger modal -->
                            <a  href="delete.php?id=<?= $row[0]?>" class="btn btn-outline-danger" >Eliminar</a>
                            <!-- Modal --> <!--data-bs-toggle="modal" data-bs-target="#exampleModal"-->
                            <!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Una vez eliminado el registro no se podra recuperar
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </th>
                    </tr>
                <?php endforeach ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="text-center">No hay registros</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<div class="container ">
<a href="../user/reporte.php" name="pdf" method="POST" class="btn btn-outline-dark">imprimir PDF</a>
</div>
<?php
require_once("/xampp/htdocs/unicaes/vistas/head/footer.php");
?>