<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/Proyecto/controller/userController.php");
    $obj =new userController();
    $rows= $obj->index();
?>


<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></head>
<h2 class = "text-center">LISTA DE ABOGADOS</h2>

<form action = "show.php" method ="get" class="row g-3">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">ID</label>
    <input type="text" readonly class="form-control-plaintext" id="busqueda" name = "ident" value="IDENTIFICACION" class = "buscarabogado">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">IDENTIFICACION</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="IDENTIFICACION">
  </div>
  <div class="col-auto">
  <a href="show.php?id=<?= $row[0] ?>" class="btn btn-primary"><i class="bi bi-search"></i> BUSCAR</i></a>
  </div>
</form>


<h1> </h1>
<DIV>
    <table class = "table table-sm">
        <thead class = "table-dark">
            <tr>
            
                <th scope = "col">NOMBRE</th>
                <th scope = "col">APELLIDOS</th>
                <th scope = "col">TELEFONO</th>
                <th scope = "col">EMAIL</th>
                <th scope = "col">DIRECCION</th>
                <th scope = "col"> </th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                   
                    <th><?= $row[4] ?></th>
                    <th><?= $row[5] ?></th>
                    <th><?= $row[6] ?></th>
                    <th><?= $row[7] ?></th>
                    <th><?= $row[8] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row[0] ?>" class="btn btn-primary"><i class="bi bi-three-dots-vertical">  Ver</i></a>
                        <a href="edit.php?id=<?= $row[0] ?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash-fill">ELIMINAR</i></a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado no se podrá recuperar el registro
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                        <!-- <button type="button" class="btn btn-danger">Eliminar</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>

        <?php endif; ?>
        </tbody>
    </table>
</DIV>




<?php
    require_once("C:/xampp/htdocs/Proyecto/view/head/footer.php");
?>