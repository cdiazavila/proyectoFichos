<?php
  try{
    $id=$_POST['id'];
    include_once('conexion.php');
    $sql="UPDATE estudiante SET estudiante.saldo=(saldo-1000) WHERE estudiante.cc='$id'";
    $resultado=$conexion->prepare($sql);
    $resultado->execute();
    echo json_encode('si');
      
 }catch(Exception $e){
     die("Error" . $e->getMessage());
     echo "linea del error".$e->getLine();
    
  }
?>