<?php 
 include("../php/index.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PhotoGall/css/signup.css">
    <link rel="icon" href="../multimedia/logo/Favicon.ico" type="icon">
    <title data-section="nav" data-value="sign up">Registrase</title>
</head>

<body>
    <header>
        <div class="navbar-container">
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
                <li> <a href="../html/index.php"  data-section="nav" data-value="home">Inicio</a></li>
                <li><a href="../html/login.php"  data-section="nav" data-value="login">Iniciar sesión</a></li>
                <li> <a href="../html/signup.php"  data-section="nav" data-value="sign up">Registrarse</a></li>
                <li> <a href="../html/acercade.php"  data-section="nav" data-value="about">Acerca de</a></li>
                <div id="flags-b" class="flags-b">
                    <div class="flags_item" data-language="es">
                        <img src="../multimedia/img/españa.png" alt="España" class="bandera">
                    </div>
                    <div class="flags_item" data-language="en">
                        <img src="../multimedia/img/British.png" alt="British" class="bandera">
                </div>
            </ul>
            <nav>
                <ul class="ful">
                    <li> <a href="../html/index.php" class="nav-link" data-section="nav" data-value="home">Inicio</a>
                    </li>
                    <li> <a href="../html/login.php" class="nav-link" data-section="nav"
                            data-value="login">Iniciar sesión</a></li>
                    <li><a href="../html/signup.php" class="nav-link signup" data-section="nav"
                            data-value="sign up">Registrarse</a></li>
                    <li><a href="../html/acercade.php" class="nav-link" data-section="nav" data-value="about">Acerca
                            de</a></li>
                    <div id="flags" class="flags">
                        <div class="flags_item" data-language="es">
                            <img src="../multimedia/img/españa.png" alt="España" class="bandera">
                        </div>
                        <div class="flags_item" data-language="en">
                            <img src="../multimedia/img/British.png" alt="British" class="bandera">
                        </div>
                    </div>
                </ul>
            </nav>
        </div>
    </header>

    <h1 data-section="signup" data-value="msm2">Formulario de registro</h1>
        
    <form action="../php/signup.php" method="post">
        <fieldset>

            <label for="name" class="label" data-section="signup" data-value="name">Nombre <input type="text" id="name" placeholder="Ingresa aquí tu nombre" name="Name"
                    required></label>
            <label for="surname"  class="label" data-section="signup" data-value="lastName">Apellidos<input type="text" id="surname" placeholder="Ingresa aquí tu apellido"
                    name="Surname" required></label>
            <label for="Emailf"  class="label" data-section="signup" data-value="email">Email <input type="email" placeholder="Ingresa aquí tu Email" name="Email" id="Emailf" required></label>
            <label  class="label" data-section="signup" data-value="gender">Escoja su genero</label>
            <label  class="label" data-section="signup" data-value="male"><input type="radio" name="gender" value="Masculino" class="inline" required>Masculino</label>
            <label   class="label" data-section="signup" data-value="Female"><input type="radio" name="gender" value="Femenino"  class="inline" required>Femenino</label>
            <label   class="label" data-section="signup" data-value="Prefer"><input type="radio" name="gender" value="Incognito" class="inline" required checked>Prefiero no decirlo</label>
            <label for="Passwordf"  class="label" data-section="signup" data-value="pass2">Contraseña (mínimo 8 caracteres) <input type="password" placeholder="Ingresa aquí tu contraseña"
                    name="Password" id="Passwordf" required  minlength="8"><button type="button" onclick="mostrarContraseña()"><i><img src="../multimedia/iconos/ver.png"></i></button></label>
            <label for="Registrarsef" class="label" data-section="signup" data-value="inputS">
                <input type="submit" value="Registrarse" id="Registrarsef"></label>
        </fieldset>

        <hr>
        <p data-section="signup" data-value="sms2">¿Ya tienes cuenta? <a href="../html/login.php" target="_self" id="login">Inicia sesión</a> </p>
    </form>

    <footer class="footer">
        <div class="footer-left">
            <img src="../multimedia/logo/logo.png" alt="">
            <p data-section="footer" data-value="shared">Comparte tus fotografías totalmente gratis en PhotoGall</p>
            <div class="socials">
                <a href="https://www.facebook.com/profile.php?id=100081953258517"><i><img class="icon" src="../multimedia/iconos/Iconf.ico" alt=""></i></a>
                <a href=""><i><img class="icon" src="../multimedia/iconos/iconTw.ico" alt=""></i></a>
                <a href="https://www.instagram.com/photogall.sv/"><i><img class="icon" src="../multimedia/iconos/iconIG.ico" alt=""></i></a>
            </div>
        </div>
        <ul class="footer-right">
            <li>
                <h2 data-section="footer" data-value="Cat">Categorías</h2>
                <ul class="box">
                    <li><a href="../html/ejeCP.php" data-section="footer" data-value="lands">Paisajes</a></li>
                    <li><a href="../html/ejemCC.php" data-section="footer" data-value="food">Comida</a></li>
                    <li><a href="../html/ejemCR.php" data-section="footer" data-value="people">Personas</a></li>
                    <li><a href="../html/ejemCA.php" data-section="footer" data-value="art">Arte</a></li>
                    <li><a href="../html/Categorias.php" data-section="footer" data-value="More">Mas Categorías...</a></li>
                </ul>
            </li>
            <li class="features">
                <h2 data-section="footer" data-value="Tools">Herramientas</h2>
                <ul class="box">
                    <li><a href="../html/index.php"  data-section="nav" data-value="home">Inicio</a>
                    </li>
                    <li class="<?php esconderv2(); ?>"><a href="../html/login.php"  data-section="nav" data-value="login">Iniciar
                            sesión</a></li>
                    <li class="<?php esconderv2(); ?>"><a href="../html/signup.php"  data-section="nav"
                            data-value="sign up">Registrarse</a></li>
                    <li><a href="../html/acercade.php"  data-section="nav" data-value="about">Acerca
                            de</a></li>
                    <li class="<?php esconder(); ?>"><a href="../html/acount.php"  data-section="nav" data-value="account">Cuenta</a></li>
                    <li><a href="../html/upload.php"  data-section="nav" data-value="upload">Subir Imagen</a></li>
                </ul>
        </ul>
        <hr>
        <div class="footer-bottom">
            <p data-section="footer" data-value="foot">Todas las fotografías son propiedad de sus dueños originales.
                &copy; PhotoGall 2022.</p>
        </div>
    </footer>
    <script src="../scrips/seepass.js"></script>
    <script src="../scrips/trad.js"></script>
</body>

</html>