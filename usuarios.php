<?php
include_once 'db.php';
class Usuarios extends DB{
    function obtenerUsuarios(){
        $query=$this->connect()->query('SELECT * FROM usuarios');
        return $query;
    }
    function obtenerUsuario($id){
        $query=$this->connect()->prepare('SELECT*FROM usuarios WHERE id= :id');
        // Con esta funcionalidad evito inyecciones de SQL
        $query->execute(['id'=>$id]);
        return $query;
    }
   
    
}

?>