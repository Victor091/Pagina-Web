<?php
$servidor="localhost";
$usuario="root";
$password="";
$baseDeDatos="datos";
$enlace = mysqli_connect($servidor,$usuario,$password,$baseDeDatos);

if(!$enlace){
    echo"Error en la conexion del servidor";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantLovers</title>
        
    <!--Debe ir antes del link a nuestro codigo css-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    
    <!--Fuentes de google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;700;800;900&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">

    <!--Para poder poner un icono en la barra del nombre se hace de la siguiente manera-->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">

    <!--Mi propia hoja de estilos-->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/styleForm.css">

    <!--Imagenes de los botones-->
    <script src="https://kit.fontawesome.com/95a4005489.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>
    <section id="title">

        <!-- Nav Bar -->
        <div class="container-fluid container-title-form">
          <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid container-navbar">
              <a class="navbar-brand" href="./index.html">PlantLovers</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#footer">Contacto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pricing">Precios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#cta">Descargas</a>
                  </li>
                </ul>
    
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
    
              </div>
            </div>
          </nav> 
        </div>
    </section>


    <section id="features">

        <form class="form" method='POST'>
            <h2 class="form__title">Registrate</h2>
    
            <div class="form__container">
                <div class="form__group">
                    <input type="text" id="name" name="name" class="form__input" placeholder="">
                    <label for="name" class="form__label">Nombre:</label>
                    <span class="form__line"></span>
                </div>
                <div class="form__group">
                    <input type="text" id="user" name="user" class="form__input" placeholder=" ">
                    <label for="user" class="form__label">Usuario:</label>
                    <span class="form__line"></span>
                </div>

                <div class="form__group">
                    <input type="text" id="correo" name="correo" class="form__input" placeholder=" ">
                    <label for="correo" class="form__label">Correo:</label>
                    <span class="form__line"></span>
                </div>

                <div class="form__group">
                    <input type="text" id="password" name="password" class="form__input" placeholder=" ">
                    <label for="password" class="form__label">Contraseña:</label>
                    <span class="form__line"></span>
                </div>

                <div class="g-recaptcha" data-sitekey="6LdfSFYgAAAAAKJzMDIdLUeZWBVdTZ8z1j8dW3go"></div>
                <input type="submit" class="form__submit" value="Entrar" name="registro">

            </div>
        </form>

        <div>
           <video autoplay muted preload loop src="./video/plantas.mp4"></video>
        </div>
        
    </section>
    <footer id="footer">
        <table class="tabla-footer">
          <tr>
            <td>
              <a href="https://twitter.com/" class="icon-footer fab fa-twitter size: 3x"></a>
            </td>
            <td>
              <a href="https://es-la.facebook.com/" class="icon-footer fab fa-facebook-f"></a>
            </td>
            <td>
              <a href="https://www.instagram.com/" class="icon-footer fab fa-instagram"></a>
            </td>
            <td>
              <a class="icon-footer glyphicon" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg></a> 
            </td>
          </tr>
        </table>
        
    
    
        <address>
          <strong><ins>Cabello Vargas Victor Manuel</ins></strong><br>
          Trabajo y Prevision Social Col Federal <br>
          Telefono: <del>5557842036</del> <mark>5566246973</mark>  <br>
    
    
        </address>
    
        <p>© Copyright PlantLovers</p>
    
    
      </footer>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
      </script>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
</html>

<?php

if(isset($_POST['registro'])){
    $nombre = $_POST["name"];
    $user = $_POST["user"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    $insertarDatos = "INSERT INTO imagenes VALUES ('$nombre', '$user', '$correo', '$password')";
    $ejecutar = mysqli_query($enlace, $insertarDatos);
    
    if(!$ejecutar){
        echo"Error en sql";
    }
}

?>