<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $usuario = $obj->show($_GET['id']); 
?>
<form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label> 
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $usuario['id'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label> 
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $usuario['nombre'] ?>"> 
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevos Apellidos</label> 
        <div class="col-sm-10">
            <input type="text" name="apellidos" class="form-control" id="inputPassword" value="<?= $usuario['apellidos'] ?>"> 
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre de usuario</label> 
        <div class="col-sm-10">
            <input type="text" name="nom_usuario" class="form-control" id="inputPassword" value="<?= $usuario['nom_usuario'] ?>"> 
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="telefono" class="form-control" id="inputPassword" value="<?= $usuario['telefono'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Dirección</label>
        <div class="col-sm-10">
            <input type="text" name="direccion" class="form-control" id="inputPassword" value="<?= $usuario['direccion'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Código Postal</label>
        <div class="col-sm-10">
            <input type="text" name="codigo_postal" class="form-control" id="inputPassword" value="<?= $usuario['codigo_postal'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Ciudad</label> 
        <div class="col-sm-10">
            <input type="text" name="ciudad" class="form-control" id="inputPassword" value="<?= $usuario['ciudad'] ?>"> 
        </div>
    </div>
    
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $usuario['id'] ?>">Cancelar</a>
    </div>
</form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
