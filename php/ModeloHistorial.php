<?php

try{


      $cc=$_POST['cc'];
       include_once('conexion.php');
       $matriz = array();
       $sql = " SELECT * FROM ventasfichos,sede,estudiante WHERE estudiante.cc=ventasfichos.idE AND ventasfichos.idS=sede.id AND idE='$cc'"; 
       $resultado=$conexion->prepare($sql);
       $resultado->execute();
       foreach ($conexion->query($sql, PDO::FETCH_ASSOC) as $item) $matriz[] = $item;
       echo json_encode($matriz);
       
    }catch(Exception $e){
        die("Error" . $e->getMessage());
        echo "linea del error".$e->getLine();
       
     }
 
?>