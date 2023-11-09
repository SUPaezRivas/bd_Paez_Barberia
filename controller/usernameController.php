<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new UserModel();
        }
        public function guardar($nombre, $apellidos, $nom_usuario, $telefono, $direccion, $codigo_postal, $ciudad){
            $id = $this->model->insertar($nombre, $apellidos, $nom_usuario, $telefono, $direccion, $codigo_postal, $ciudad);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre, $apellidos, $nom_usuario, $telefono, $direccion, $codigo_postal, $ciudad){
            return ($this->model->update($id, $nombre, $apellidos, $nom_usuario, $telefono, $direccion, $codigo_postal, $ciudad) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }
?>
