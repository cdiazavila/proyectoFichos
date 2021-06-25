<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de compra</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styleLista_compra.css">
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION["usuarios"])){
     header("location:../index.php");
     }
?>
    <header>
        <img src="../img/logo2.png" alt="" srcset=""> 
        <h4>Universidad
            <br>
             de <br>
              Cordoba 
            </h4>  
            <h2>Compra de fichos</h2>
       
    </header> 
    <hr>
    <nav>
       
        <ul>
            <li><a href="paginaPrincipal.php"> Ir Inicio</a> </li>
            <li> <a href="compra.php">Comprar Fichos</a></li>
            <li><a href="historia.php"> Mi Historial Compra</a></li>
            <li> <a href="cerrer_sesion.php"  onclick="localStorage.clear()">Cerrar Sesion</a></li>
        </ul>
        
    </nav>
    <hr>
    
     
    <aside>
      
    </aside>
    <section id="container"> 
      <div class="tabla">
       <table  class="table col-md-11 ">
           <thead class="thead-dark">
            <tr style="color:#000000;">
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>CARRERA</th>
                <th># FICHO</th>
             
        
            </tr>
           </thead>
           <tbody>
           </tbody>

       </table>
       </div>
    </section>
    <aside>
      
    </aside>
    <footer>Universidad de Cordoba &copf; </footer>
</body>
</html>