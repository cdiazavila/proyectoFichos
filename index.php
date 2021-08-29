<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img src="img/logo2.png" alt="" srcset=""> 
        <h4>
            <br>
            Universidad 
            <br>
             de 
             <br>
            Cordoba </h4>  
            <br>
        <h2>Compra de fichos</h2>
    </header> 
    <hr>
    <nav>
        <ul>
            <li><a href="vistas/listaLorica.php">Lista Lorica</a></li>
            <li><a href="vistas/listaMonteria.php">Lista Monteria</a></li>
            <li><a href="vistas/listaSahagun.php">Lista Sahagun</a></li>
            <li><a href="vistas/listaBerastigui.php">Lista Berastigui</a></li>
        </ul>
    </nav>
    <hr>

    <aside>
        <div id="formulario" >
            <form id="formularios"  method="post"> 
               
                <label for="user">usuario</label> 
                <input type="text" id="usuario" name="usuario"  placeholder="Usuario" >
                <br>
                <label for="pass">contraseña</label> 
                <input type="password" id="pass" name="pass"  placeholder="password" > <br>
                 <button type="submit">Acceso</button>
            </form>
            <div id="respuesta" class="res"></div>
        </div>
        <hr>
        <a href="#">olvide mi contraseña</a>
    </aside>

    <section id="container"> 
        <img src="img/autoeva_organigrama.jpg" alt="">
    </section>
    <footer>
        
        Universidad de Cordoba &copf; 
    </footer>
   

    <script  src="js/login.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
       
</body>
</html>