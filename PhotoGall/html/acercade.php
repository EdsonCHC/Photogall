<?php
include("../php/index.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PhotoGall/css/acercade.css" type="text/css">
    <link rel="icon" href="../multimedia/logo/Favicon.ico" type="icon">
    <title data-section="nav" data-value="about">Acerca de</title>
</head>

<body>
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
            <li> <a href="../html/index.php" data-section="nav" data-value="home">Inicio</a></li>
            <li class=" <?php esconderv2(); ?>"><a href="../html/login.php" data-section="nav" data-value="login">Iniciar sesión</a></li>
            <li> <a href="../html/signup.php" data-section="nav" data-value="sign up">Registrarse</a></li>
            <li><a href="../html/acercade.php" data-section="nav" data-value="about">Acerca de</a></li>
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
                <li class="nav-link"> <a href="../html/index.php"  data-section="nav"
                        data-value="home">Inicio</a></li>
                <li class="nav-link <?php esconderv2(); ?>"> <a href="../html/login.php"  data-section="nav"
                        data-value="login">Iniciar
                        sesión</a></li>
                <li class="nav-link <?php esconderv2(); ?>"> <a href="../html/signup.php" data-section="nav"
                        data-value="sign up">Registrarse</a></li>
                <li class="nav-link acercade"> <a href="../html/acercade.php" data-section="nav"
                        data-value="about">Acerca de</a></li>
                <li class="nav-link <?php esconder(); ?>" id="account"> <a href="../html/acount.php"  data-section="nav" data-value="account">Cuenta</a></li>
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
    <header>

        <div class="hero-header">
            <h1 data-section="about" data-value="about">
                Acerca de PhotoGall
            </h1>

            <a href="https://wallhaven.cc" class="credit" target="_blank">
                <p data-section="header" data-value="credit">Imagen gracias a Wallhaven.cc</p>
            </a>
        </div>

    </header>

    <main>
        <section class="item">
            <h2 data-section="about" data-value="what is">¿Qué es PhotoGall?</h2>
            <p class="nparagraph" data-section="about" data-value="wstxt"> PhotoGall es un sitio web que permite el
                acceso, almacenamiento y subida de
                fotografías digitales
                para que los fotógrafos muestren su trabajo y talento en la fotografía.
                <br>
                <br>
                Así mismo ofrecer una interfaz para el usuario que solamente desee observar, admirar y disfrutar estas
                fotografías pudiendo dar like a las fotografías y seguir a los usuarios en muestra de apoyo hacia ellos.
            </p>
        </section>
        <section class="item">
            <h2 data-section="about" data-value="vision">Vision de PhotoGall</h2>
            <p class="ctext" data-section="about" data-value="vtxt">“Ser una pagina centrada en el uso de nuevas
                tecnologías
                al servicio del cliente para que puedan descubrir y mostrar su potencial en la fotografía a todo el
                mundo”
            </p>
        </section>
        <section class="item">
            <h2 data-section="about" data-value="misión" >Misión de PhotoGall</h2>
            <p class="ctext" data-section="about" data-value="mtxt">
                “Nuestra misión es elevar la calidad de experiencia del cliente haciendo uso del internet y la
                tecnología para ayudar al cliente a encontrar, descubrir el arte de otros y potenciar a los creadores de
                contenido y que alcancen el éxito"
            </p>
        </section>
        <section class="item">
            <h2 data-section="about" data-value="story">Historia</h2>
            <p class="nparagraph" data-section="about" data-value="stxt">
                El proyecto de PhotoGall nace en la menta de 3 estudiantes de bachillerato, que por pasión al mundo de
                la tecnología
                y las ganas de deciden empezar a crear esta pagina como proyecto educativo y en el proceso aprender
                nuevas cosas que
                les servirían en su futuro dándolo todo al servicio de las personas.
            </p>
        </section>
    </main>

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
    <script src="../scrips/trad.js"></script>
</body>

</html>