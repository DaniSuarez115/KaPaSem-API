<?php
include_once 'usuarios.php';
class ApiUsuarios{
    function getAll(){
        $usuario=new Usuarios();
        $usuarios=array();
        $usuarios["Items"]=array();

        $respuesta=$usuario->obtenerUsuarios();
        if ($respuesta->rowCount()) {
            while ($row=$respuesta->fetch(PDO::FETCH_ASSOC)) {
                $item=array(
                    'id'=>$row['id'],
                    'user'=>$row['user'],
                    'PASSWORD'=>$row['PASSWORD'],
                    'email'=>$row['email'],
                    'rol'=>$row['rol']

                );
                array_push($usuarios['Items'],$item);
            }
            echo json_encode($usuarios);
        }else {
            echo json_encode(array('Mensaje'=>'No hay elementos registrados'));
        }
    }
}
?>