<?php
     include("../php/index.php");
    if(!isset($_SESSION["user_info"])){
        $var = "Primero debes iniciar sesión...";
        echo "<script> alert('".$var."');
        window.location.href='../html/login.php';
        </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PhotoGall/css/upload.css" type="text/css">
    <link rel="icon" href="../multimedia/logo/Favicon.ico" type="icon">
    <title>Subir archivo</title>
    <script src="../scrips/preview.js"></script>
</head>

<body>
    <header class="navbar-container">
        <div class="divheader">
            <img class="logo" src="../multimedia/logo/logo.png" alt="Logo de la pagina">
            <a href="../html/index.php" class="nameh">
                <img src="../multimedia/logo/Nombre.png" alt="">
            </a>
        </div>
        <label class="ib" for="burguer">
            <img src="../multimedia/iconos/label.png" alt="label">
        </label>
        <input type="checkbox" name="hamburger" id="burguer">
        <ul class="nav-menu">
            <!--Menu de aburguesa-->
            <li> <a href="../html/index.php" data-section="nav" data-value="home">Inicio</a></li>
            <li><a href="../html/login.php" data-section="nav" data-value="login">Iniciar sesión</a></li>
            <li> <a href="../html/signup.php" data-section="nav" data-value="sign up">Registrarse</a></li>
            <li> <a href="../html/acercade.php"data-section="nav" data-value="about">Acerca de</a></li>
            <li> <a href="../html/acount.php" data-section="nav" data-value="account">Cuenta</a></li>
            <div id="flags-b" class="flags-b">
                <div class="flags_item" data-language="es">
                    <img src="../multimedia/img/españa.png" alt="España" class="bandera">
                </div>
                <div class="flags_item" data-language="en">
                    <img src="../multimedia/img/British.png" alt="British" class="bandera">
                </div>
            </div>
        </ul>
        <nav>
            <ul class="ful">
                <li><a href="../html/index.php" class="nav-link" data-section="nav" data-value="home">Inicio</a></li>
                <li class=" <?php esconderv2(); ?>"><a href="../html/login.php" class="nav-link" data-section="nav" data-value="login">Iniciar sesión</a></li>
                <li class=" <?php esconderv2(); ?>"><a href="../html/signup.php" class="nav-link" data-section="nav" data-value="sign up">Registrarse</a></li>
                <li><a href="../html/acercade.php" class="nav-link" data-section="nav" data-value="about">Acerca de</a></li>
                <li><a href="../html/acount.php" class="nav-link" data-section="nav" data-value="account">Cuenta</a></li>
                <li><a href="../html/upload.php" class="nav-link upload" data-section="nav" data-value="upload">Subir imagen</a></li>
                <div id="flags" class="flags">
                    <div class="flags_item" data-language="es">
                        <img src="../multimedia/img/españa.png" alt="España" class="bandera">
                    </div>
                    <div class="flags_item" data-language="en">
                        <img src="../multimedia/img/British.png" alt="British" class="bandera">
                </div>
            </ul>
        </nav>
        </div>
    </header>
    <div class="container">
        <div class="img-info">
            <form action="../php/upload.php" method="POST" enctype="multipart/form-data">

                <div class="subir">
                    <div class="img-container">
                        <img src="" alt="" id="img-preview">
                    </div>
                    <label for="subir" class="Slabel" data-section="upload" data-value="selectp">Seleccionar fotografía<input type="file" accept="image/*" id="subir" name="Subir" onchange="vista_preliminar(event)"></input></label>
                    </div>
                <fieldset>
                    <legend data-section="upload" data-value="pinfo">Información de la foto</legend>
                    <label for="name" data-section="upload" data-value="tag">Etiqueta
                        <input type="text" name="Name" placeholder="Etiqueta" required>
                    </label>
                    <label for="lugar" data-section="upload" data-value="place">Lugar<span class="sub"> (Opcional)</span>
                        <input type="text" id="lugar" name="Lugar" placeholder="Lugar">
                    </label>
                    <label for="cat"  data-section="upload" data-value="select">Categoría
                        <select name="categoría" id="cat" required>
                            <option value="" selected disabled>Selecciona una categoría</option>
                            <option value="Personas">Retrato</option>
                            <option value="Paisajes">Paisajes</option>
                            <option value="Comida">Comida</option>
                            <option value="Animales">Animales</option>
                            <option value="Arte">Arte</option>
                        </select>
                    </label>
                    <label for="submit" class="Slabel" data-section="upload" data-value="submit">Subir fotografía</label>
                    <input type="submit" name="subir" id="submit">
                </fieldset>
            </form>
            
        </div>
    </div>
    <footer>
        <h5 data-section="footer" data-value="foot">Todas las fotografías son propiedad de sus dueños originales. &copy; PhotoGall 2022.</h5>
    </footer>
    <script src="../scrips/trad.js"></script>
</body>

</html>