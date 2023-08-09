<?php
include_once 'usuarios.php';
class ApiUsuarios{
    function getById($id) {
        if (is_numeric($id)) {
            $usuario = new Usuarios();
            $usuarios = array();
            $usuarios["Items"] = array();

            // Obtener datos del usuario por ID
            $respuesta = $usuario->obtenerUsuario($id);

            if ($respuesta->rowCount() > 0) {
                $row = $respuesta->fetch(PDO::FETCH_ASSOC);
                $item = array(
                    'id' => $row['id'],
                    'user' => $row['user'],
                    'PASSWORD' => $row['PASSWORD'],
                    'email' => $row['email'],
                    'rol' => $row['rol']
                );
                array_push($usuarios['Items'], $item);
                $this->printJSON($usuarios);
            } else {
                $this->error('No se encontró un usuario con el ID proporcionado.');
            }
        } else {
            $this->error('El parámetro ID debe ser numérico.');
        }
    }
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
            $this-> printJSON($usuarios);
        }else {
        
            // echo json_encode(array('Mensaje'=>'No hay elementos registrados'));
            $this->error('No hay elementos registrados');
        }
      
    }
    function printJSON($array){
        echo '<code>'.json_encode($array).'</code>';
    }
   
    function error($mensaje){
        
        echo '<code>' .json_encode(array('mensaje'=>$mensaje)).'</code>';
    }
    
  
}
?>
