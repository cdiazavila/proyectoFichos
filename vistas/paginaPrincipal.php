<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina principal</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="../css/styleVistasprincipal.css">
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
            de 
            <br>
            Cordoba </h4> 
            <br> 
        <h2>Compra de fichos</h2>
        <div class="datos">
        <p id="dato"></p>
        <p id="saldo"></p>
        </div>
      

       
    </header> 
    <hr>
    <nav>
        <ul>
            <li> <a href="compra.php">Comprar Fichos</a></li>
            <li><a href="lista_compra.php">Lista de Compras</a> </li>
            <li><a href="historia.php"> Mi Historial Compra</a></li>
            <li> <a href="cerrer_sesion.php" onclick="localStorage.clear()">Cerrar Sesion</a></li>
        </ul>
    </nav>
     <hr>
    <aside >
    </aside>
    <section id="container"> 
        <img src="../img/autoeva_organigrama.jpg" alt="">
    </section>
    <aside>
      
    </aside>
    <footer>Universidad de Cordoba &copf; </footer>
    <script src="../js/app.js" ></script>
</body>
</html>