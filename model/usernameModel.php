<?php
    class UserModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre, $apellidos, $nom_usuario, $telefono, $direccion, $codigo_postal, $ciudad){
            $stament = $this->PDO->prepare("INSERT INTO usuarios VALUES(null, :nombre, :apellidos, :nom_usuario, :telefono, :direccion, :codigo_postal, :ciudad)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellidos",$apellidos);
            $stament->bindParam(":nom_usuario",$nom_usuario);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":codigo_postal",$codigo_postal);
            $stament->bindParam(":ciudad",$ciudad);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM usuarios where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM usuarios");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id, $nombre, $apellidos, $nom_usuario, $telefono, $direccion, $codigo_postal, $ciudad){
            $stament = $this->PDO->prepare("UPDATE usuarios SET nombre = :nombre, apellidos = :apellidos, nom_usuario = :nom_usuario, telefono = :telefono, direccion = :direccion, codigo_postal = :codigo_postal, ciudad = :ciudad WHERE id = :id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellidos",$apellidos);
            $stament->bindParam(":nom_usuario",$nom_usuario);
            $stament->bindParam(":telefono",$telefono);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":codigo_postal",$codigo_postal);
            $stament->bindParam(":ciudad",$ciudad);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM usuarios WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }
?>
