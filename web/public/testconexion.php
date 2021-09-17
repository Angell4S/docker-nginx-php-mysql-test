<?php
    
    
 
    
         
    $mysqli = new mysqli("mysql", "root", "root", "prueba");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
    }else{
        echo "conexion exitosa";
    }
        
 
 
     
 
     ?>