<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de compra</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styleLista_compra.css">
    <script src="dist/jspdf.min.js"></script>
    <script src="js/jquery.min.js"></script>
   
</head>
<body>

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
            <li><a href="vistas/listaMonteria.php">Lista Monteria</a></li>
            <li><a href="vistas/listaSahagun.php">Lista Sahagun</a></li>
            <li><a href="vistas/listaBerastigui.php">Lista Berastigui</a></li>
        </ul>
        
    </nav>
    <hr>
    
     
    <aside>
        <div clase="col-md-12 ml-5">
          <p id="cantidadComprada"></p>
          <p id="cantidadDisponible"></p>
        </div>
      <form id="formulario" method="post">
          <div clase="inputs">
          <input type="text" id="sede" name="sede">
          <input type="text" id="fecha" name="fecha">
  
          </div>
         <button  type="button" class="btn btn-primary" id="boton">DESCARGAR</button>
      
      </form>
    </aside>
    <section id="container"> 
      <div class="tabla">
       <table  class="table col-md-11" id="tabla">
           <thead class="thead-dark">
            <tr style="color:#000000;">
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>CARRERA</th>
                <th>SEDE</th>
                <th>FECHA</th>
             
        
            </tr>
           </thead>
           <tbody>
           </tbody>

       </table>
       </div>
       <div id="elementH"></div>
    </section>
    <aside>
   
    </aside>
    <footer>Universidad de Cordoba &copf; </footer>

    <script src="../js/listaLorica.js"></script>
    <script src="../dist/jspdf.min.js"></script>
</body>
</html>