<?php
try{
       $id=$_POST['id'];
       $sede=$_POST['sede'];
       $semestre=$_POST['semestre'];
       $fecha=$_POST['fecha'];
       include_once('conexion.php');
       $sql = "INSERT INTO ventasfichos VALUES ('', '$id', '$sede', '1', '$semestre', '$fecha')";
       $resultado=$conexion->prepare($sql);
       $resultado->execute();
         echo json_encode('si');
    
    }catch(Exception $e){
        die("Error" . $e->getMessage());
        echo "linea del error".$e->getLine();
       
     }
 
?>