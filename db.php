<?php
class  db
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    function __construct(){
        $this->host='';
        $this->db='';
        $this->user='';
        $this->password='';
        $this->charset='';


        // funcion para conectarse a la base de datos
        function connect(){
            try {
                $conection="mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                $pdo = new PDO($connection,$this->user,$this->password);
                return $pdo;
            } catch (PDOException $e) {
                print_r('Error connection: ' . $e->getMessage());
            }
        }







    }
}
?>