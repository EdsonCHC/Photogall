<?php
include("../php/index.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PhotoGall/css/cate.css" type="text/css">
    <link rel="icon" href="../multimedia/logo/Favicon.ico" type="icon">
    <title data-section="nav" data-value="cate">Categorías</title>
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
            <li class="<?php esconderv2();?>"> <a href="../html/login.php" data-section="nav" data-value="login">Iniciar sesión</a></li>
            <li class="<?php esconderv2();?>"> <a href="../html/signup.php" data-section="nav" data-value="sign up">Registrarse</a></li>
            <label for="cate"><li><a data-section="nav" data-value="cate">Categorías</a></li></label>
            <input type="checkbox" id="cate">
            <div class="menu-vertical-b">
                    <ul>
                    <li><a href="../html/ejemCP.php" data-section="footer" data-value="lands">Paisajes</a></li>
                    <li><a href="../html/ejemCC.php" data-section="footer" data-value="food">Comida</a></li>
                    <li><a href="../html/ejemCR.php" data-section="footer" data-value="people">Personas</a></li>
                    <li><a href="../html/ejemCA.php" data-section="footer" data-value="art">Arte</a></li>
                    <li><a href="../html/Categorias.php" data-section="footer" data-value="More">Mas Categorías...</a></li>
                    </ul>
            </div>
            <li><a href="../html/acercade.php" data-section="nav" data-value="about">Acerca de</a></li>
            <li class="<?php esconder(); ?>"> <a href="../html/acount.php"  data-section="nav" data-value="account">Cuenta</a></li>
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
                <li class="nav-link"> <a href="../html/index.php" data-section="nav" data-value="home">Inicio</a></li>
                <li class="nav-link <?php esconderv2(); ?> "> <a href="../html/login.php" data-section="nav" data-value="login">Iniciar
                        sesión</a></li>
                <li class="nav-link  <?php esconderv2(); ?> "> <a href="../html/signup.php" data-section="nav"
                        data-value="sign up">Registrarse</a></li>
                <li class="nav-link categoría" id="menu-horizontal"> <a href="../html/Categorias.php"  data-section="nav" data-value="cate">Categorías</a>
                <ul class="menu-vertical">
                    <li><a href="../html/ejeCP.php" data-section="footer" data-value="lands">Paisajes</a></li>  
                    <li><a href="../html/ejemCC.php" data-section="footer" data-value="food">Comida</a></li>
                    <li><a href="../html/ejemCR.php" data-section="footer" data-value="people">Retrato</a></li>
                    <li><a href="../html/ejemCA.php"data-section="footer" data-value="art">Arte</a></li>
                </ul>
                </li>
                        <li class="nav-link acercade"> <a href="../html/acercade.php" data-section="nav"
                        data-value="about">Acerca de</a></li>
                <li class="nav-link <?php esconder(); ?>"> <a href="../html/acount.php"  data-section="nav" data-value="account">Cuenta</a></li>
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
            <h1 data-section="nav" data-value="cate">
                Categorías
            </h1>

            <a href="https://wallhaven.cc" class="credit" target="_blank">
                <p data-section="header" data-value="credit">Imagen gracias a Wallhaven.cc</p>
            </a>
        </div>

    </header>

    <main>
        <section class="item">
            <h2 data-section="cate" data-value="Catein">Categorías En PhotoGall</h2>
            <p class="nparagraph" data-section="cate" data-value="info"> Al ser un sitio con el objetivo principal de
                almacenar
                fotografías PhotoGall cuenta con las categorías mas comunes en el mundo de la fotografía, tales como:
            </p>
        </section>
        <section class="item">
            <h3 data-section="cate" data-value="p">Paisajes</h3>
            <p class="nparagraph" data-section="cate" data-value="pinfo">Los paisajes fueron unos de los primeros
                retratados
                en los inicios de la fotografía ayudando a su evolución y siendo unos de los favoritos de los
                fotógrafos.
            <figure class="figure">
                <img src="../multimedia/fondos/wallhaven-k7y3zd.jpg" alt="Foto de un entre 2 montañas">
                <figcaption><a href="https://wallhaven.cc/w/k7y3zd" target="_blank" class="atrib">Wallhaven.cc</a>
                </figcaption>
                <a href="..//html/ejeCP.php" id="goto" data-section="cate" data-value="seeP">Ver Fotografías de paisajes</a>
            </figure>

            </p>
        </section>
        <section class="item">
            <h3 data-section="cate" data-value="C">Comida</h3>
            <p class="nparagraph" data-section="cate" data-value="cinfo">La fotografía de alimentos es una forma de
                fotografía comercial especializada en naturaleza muerta, destinada a la producción de fotografías
                atractivas de alimentos para su uso en publicidad, etiquetas o incluso arte abstracto.
            <figure class="figure">
                <img src="../multimedia/fondos/food.jpg" alt="Foto de un pay de moras">
                <figcaption><a href="https://wallhaven.cc/w/1367pw" target="_blank" class="atrib">Wallhaven.cc</a>
                </figcaption>
                <a href="../html/ejemCC.php" id="goto" data-section="cate" data-value="seeC">Ver Fotografías de Comida</a>
            </figure>
            </p>
        </section>
        <section class="item">
            <h3 data-section="cate" data-value="R">Retrato</h3>
            <p class="nparagraph" data-section="cate" data-value="Rinfo">El retrato fotográfico es un género donde se
                reúnen toda una serie de iniciativas artísticas que giran en torno a la idea de mostrar las cualidades
                físicas o morales de las persona u animales que aparecen.
            <figure class="figure">
                <img src="../multimedia/fondos/animal.jpg" alt="Foto de un perro">
                <figcaption><a href="https://wallhaven.cc/w/zxm9my" target="_blank" class="atrib">Wallhaven.cc</a>
                </figcaption>
                <a href="../html/ejemCR.php" id="goto" data-section="cate" data-value="seeR">Ver Fotografías de Retratos</a>
            </figure>
            </p>
        </section>
        <section class="item">
            <h3 data-section="cate" data-value="A">Fotografía Artística</h3>
            <p class="nparagraph" data-section="cate" data-value="Ainfo">La fotografía artística tiene como objetivo
                transmitir conceptos, sentimientos y emociones. Existe una intención por parte del autor en comunicar e
                invitar hacer una reflexión sobre un determinado tema.
            <figure class="figure">
                <img src="../multimedia/fondos/retrato.jpg" alt="Foto artística">
                <figcaption><a href="http://www.entreperiodistas.com/wp-content/uploads/2019/04/fotografia-artistica-alfred-hitchcock-philippe-halsman.jpg" target="_blank" class="atrib">Restrato de Alfred hitchcock por Philippe Halsman---EntrePeriodistas.com</a>
                </figcaption>
                <a href="../html/ejemCA.php" id="goto"  data-section="cate" data-value="seeA">Ver Fotografías Artríticas</a>
            </figure>
            </p>
        </section>
        <h2 class="prox" data-section="cate" data-value="prox">Próximamente más categorías....</h2>
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