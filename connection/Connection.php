<?php

    class Connection extends Mysqli
    {
        function __construct(){
            parent::__construct('127.0.0.1:3366','root','','api_rest');
            $this->set_charset('utf8');
            $this->connect_error == NULL ? 'Conexion exitosa a la DB' : die('Error al conectarse a la DB');
        }
    }
    
?>