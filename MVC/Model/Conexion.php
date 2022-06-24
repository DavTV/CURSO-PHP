<?php
    class Conexion{
        private $con;
        public function __construct()
        {
            $this->con = new mysqli('localhost','root','','proyectofinal');

        }

        public function getProducts(){
            $query = $this->con->query('SELECT * FROM productos');
            $i=0;
            $retorno = [];
            while ($row = $query->fetch_assoc()){
                $retorno[$i] = $row;
                $i++;
            }

            return $retorno;
        }
    }

?>