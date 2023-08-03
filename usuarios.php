<?php
include_once 'db.php';
class Usuarios extends DB{
    function obtenerUsuarios(){
        $query=$this->connect()->query('SELECT * FROM usuarios');
        return $query;
    }
}
?>