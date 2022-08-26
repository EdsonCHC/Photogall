<?php 
 include("../php/index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PhotoGall/css/infofoto.css" type="text/css">
    <link rel="icon" href="../multimedia/logo/Favicon.ico" type="icon">
    <title>PhotoGall</title>
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
            <li class="<?php esconderv2(); ?>"><a href="../html/login.php" data-section="nav" data-value="login">Iniciar sesión</a></li>
            <li class="<?php esconderv2(); ?>"><a href="../html/signup.php" data-section="nav" data-value="sign up">Registrarse</a></li>
            <li><a href="../html/acercade.php" data-section="nav" data-value="about">Acerca de</a></li>
            <li class=" <?php esconder(); ?>"><a href="../html/acount.php"  data-section="nav" data-value="account">Cuenta</a></li>
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
                <li class="<?php esconderv2(); ?>"><a href="../html/login.php" class="nav-link" data-section="nav" data-value="login">Iniciar sesión</a></li>
                <li class="<?php esconderv2(); ?>"><a href="../html/signup.php" class="nav-link" data-section="nav" data-value="sign up">Registrarse</a></li>
                <li><a href="../html/acercade.php" class="nav-link" data-section="nav" data-value="about">Acerca de</a></li>
                <li class="<?php esconder(); ?>"><a href="../html/acount.php" class="nav-link" data-section="nav" data-value="account">Cuenta</a></li>
                <li><a href="../html/upload.php" class="nav-link" data-section="nav" data-value="upload">Subir imagen</a></li>
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
            <div class="subir">
                <div class="img-container">
                    <img src="<?php echo $_SESSION["id"];?>" alt="" id="img-preview">
                </div>
                <div class="user-info">
                    <table class="tb">
                        <tr>
                            <td class="td1" data-section="info" data-value="author">Autor:</td>
                            <td class="td2"><a href="" class="ndl"></a><?php echo $_SESSION["img"][1];?></td>
                        </tr>
                        <tr>
                            <td class="td1" data-section="info" data-value="tag">Etiqueta:</td>
                            <td class="td2"><?php echo $_SESSION["img"][2];?></td>
                        </tr>
                        <tr>
                            <td class="td1" data-section="info" data-value="Place">Lugar:</td>
                            <td class="td2"><?php echo $_SESSION["img"][3];?></td>
                        </tr>
                        <tr>
                            <td class="td1" data-section="info" data-value="cat">Categoría:</td>
                            <td class="td2"><a href="" class="ndl"><?php echo $_SESSION["img"][4];?></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <h5 data-section="footer" data-value="foot">Todas las fotografías son propiedad de sus dueños originales. &copy; PhotoGall 2022.</h5>
    </footer>
    <script src="../scrips/trad.js"></script>
</body>

</html>