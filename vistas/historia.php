<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de compra</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
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
        <h4>
            <br>
            Universidad 
            <br>
             de 
             <br>
             Cordoba 
        </h4> 
            <h2>
                  <br>
                  Compra de fichos
            </h2>
        
    </header> 
    <hr>
    <nav>
        <ul>
            <li><a href="paginaPrincipal.php"> Ir Inicio</a> </li>
            <li> <a href="compra.php">Comprar Fichos</a></li>
            <li><a href="lista_compra.php"> lista de Compra</a></li>
            <li><a href="cerrer_sesion.php"  onclick="localStorage.clear()">Cerrar Sesion</a></li>
        </ul>
    </nav>
    <hr>


    <aside>
       <form id="formulario" method="post">
       <input type="text" id="cc" name="cc" >
       </form>
    </aside>


    <section id="container"> 
    <div id="tabla">
    <table class="table  table-striped table-hover " >
            <thead class="thead-dark">
             <tr style="color:#000000;">
                 <th>SEMESTRE CURSADO</th>
                 <th>SEDE</th>
                 <th>CARRERA</th>
                 <th>FECHA</th>
             </tr>
            </thead>
             
             </table>
             </div>
    </section>

    
    <aside>

    </aside>


    <footer>Universidad de Cordoba &copf; </footer>

    <script  src="../js/historial.js"></script>
  
</body>
</html>