<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");

    $obj = new usernameController();

    $usuario = $obj->show($_GET['id']); // Suponiendo que el parámetro en la URL es 'id'

    if ($usuario) {
?>

<h2 class="text-center">Detalles del usuario</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $usuario['id'] ?>" class="btn btn-success">Actualizar</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el usuario?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado, no se podrá recuperar el usuario.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $usuario['id'] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Nombre de usuario</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Código Postal</th>
            <th scope="col">Ciudad</th>
           
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['nombre'] ?></td>
            <td><?= $usuario['apellidos'] ?></td>
            <td><?= $usuario['nom_usuario'] ?></td>
            <td><?= $usuario['telefono'] ?></td>
            <td><?= $usuario['direccion'] ?></td>
            <td><?= $usuario['codigo_postal'] ?></td>
            <td><?= $usuario['ciudad'] ?></td>
            
        </tr>
    </tbody>
</table>

<?php
    } else {
        // Manejar el caso en el que no se encuentre el usuario
        echo "Usuario no encontrado";
    }

    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
