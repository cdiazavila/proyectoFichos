<?php
try{
       $id=$_POST['id'];
       $sede=$_POST['sede'];
       $semestre=$_POST['semestre'];
       $monto=$_POST['monton'];
       $carrera=$_POST['carrera'];
       $fecha=$_POST['fecha'];
       include_once('conexion.php');
       $sql = "INSERT INTO ventasfichos VALUES ('', '$id', '$sede', '1', '$carrera', '$semestre', '$fecha')";
       $resultado=$conexion->prepare($sql);
       $resultado->execute();
       echo json_encode('si');
       
    }catch(Exception $e){
        die("Error" . $e->getMessage());
        echo "linea del error".$e->getLine();
       
     }
 
?>