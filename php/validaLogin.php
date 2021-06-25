<?php
   try{
       include_once('conexion.php');
        $sql="SELECT * FROM estudiante WHERE usuario = :usuario AND pass = :pass";
        $resultado=$conexion->prepare($sql);
        $usuario=htmlentities(addslashes($_POST["usuario"]));
        $pass=htmlentities(addslashes($_POST["pass"]));
        $resultado->bindValue(":usuario",$usuario);
        $resultado->bindValue(":pass",$pass);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
        if($numero_registro!=0){
            session_start();
            $_SESSION["usuarios"]=$_POST["usuario"];
             echo json_encode('si');
         
                 
        }else{
          echo json_encode('no');
        }

    }catch(Exception $e){
       die("Error" . $e->getMessage());
       echo "linea del error".$e->getLine();

    }


 
?>