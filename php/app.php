<?php

try{
      $usuario=$_POST['usuario'];
      $password=$_POST['pass'];
       include_once('conexion.php');
       $matriz = array();
       $sql = " SELECT * FROM estudiante WHERE usuario='$usuario' AND pass='$password'"; 
       $resultado=$conexion->prepare($sql);
       $resultado->execute();
       $numero_registro=$resultado->rowCount();
       if($numero_registro!=0){
        foreach ($conexion->query($sql, PDO::FETCH_ASSOC) as $item) $matriz[] = $item;
        echo json_encode($matriz);
       }
     
       
    }catch(Exception $e){
        die("Error" . $e->getMessage());
        echo "linea del error".$e->getLine();
       
     }
 
?>