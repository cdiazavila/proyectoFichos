<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
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
        <br>
         <h2>Compra de ficho</h2>
       
    </header> 
    <hr>
    <nav>
        <ul>
            <li><a href="paginaPrincipal.php"> Ir Inicio</a> </li>
            <li> <a href="historia.php">Historia De Compra</a></li>
            <li><a href="lista_compra.php"> lista de Compra</a></li>
            <li> <a href="cerrer_sesion.php"  onclick="localStorage.clear()">Cerrar Sesion</a></li>
        </ul>
    </nav>
    <hr>

    <aside>
        <div>
            <form  id="formulario" method="post" >
               
                <label for="id">Confirmar Id</label> 
                <input type="text" name="id" id="id" placeholder="Corfirmar" >
                <br>
                <label for="sede">Sede</label> 
                <select id="sede" name="sede" >
                    <option value="">Elige tu sede</option> 
                   
                    </select>
                    <br>
                    <label for="semestre">Semestre que Cursa</label> 
                    <select id="semestre" name="semestre" >
                        <option value="">Elige tu semestre </option> 
                        <option value="I">I</option> 
                        <option value="II">II</option>
                        <option value="III">III</option> 
                        <option value="IV">IV</option>
                        <option value="V">V</option> 
                        <option value="VI">VI</option>
                        <option value="VII">VII</option> 
                        <option value="VIII">VIII</option>
                        <option value="IX">IX</option> 
                        <option value="X">x</option>
                        </select>
             
                      <br>
                      <input type="text" name="fecha" id="fecha"><br>
                      <hr>
                    
                 <button type="submit" name="guardar">Comprar</button>
            </form>

            <div id="respuesta"></div>
        </div>
    </aside>
    <section id="container"> 
        <h6>COMPRA TU FICHO</h6>
      <p> puedes hacer la Compra de tu ficho con un valor de 1000 mil pesos </p>
    </section>
    <footer>Universidad de Cordoba &copf; </footer>
    <script src="../js/compra.js"></script>
    <script src="../js/dist/jspdf.min.js"></script>
</body>
</html>