<?php 

try{
    $id=$_POST['id'];
    $fecha=$_POST['fecha'];
    include_once('conexion.php');
    $matriz = array();
    $sql = "SELECT COUNT(idE) AS numeroCompras FROM `ventasfichos` WHERE idE='$id' AND fecha='$fecha'";
    $resultado=$conexion->prepare($sql);
    $resultado->execute();
    foreach ($conexion->query($sql, PDO::FETCH_ASSOC) as $item) $matriz[] = $item;
       echo json_encode($matriz);
    
 }catch(Exception $e){
     die("Error" . $e->getMessage());
     echo "linea del error".$e->getLine();
    
  }
?>