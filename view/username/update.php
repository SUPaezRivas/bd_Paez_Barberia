<?php
require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
$obj = new usernameController();
$obj->update($_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['nom_usuario'], $_POST['telefono'], $_POST['direccion'], $_POST['codigo_postal'], $_POST['ciudad']);
?>