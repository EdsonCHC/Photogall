<?php
include("../php/index.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PhotoGall/css/ejemcate.css" type="text/css">
    <link rel="icon" href="../multimedia/logo/Favicon.ico" type="icon">
    <title data-section="cate" data-value="A">Fotografía Artística</title>
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
            <li class="<?php esconderv2(); ?>"><a href="../html/login.php" data-section="nav" data-value="login">Iniciar sesión</a></li>
            <li class="<?php esconderv2(); ?>"> <a href="../html/signup.php" data-section="nav" data-value="sign up">Registrarse</a></li>
            <label for="cate"><li><a data-section="nav" data-value="cate">Categorías</a></li></label>
            <input type="checkbox" id="cate">
            <div class="menu-vertical-b">
                    <ul>
                    <li><a href="../html/ejeCP.php" data-section="footer" data-value="lands">Paisajes</a></li>
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
                <li class="nav-link <?php esconderv2(); ?>"> <a href="../html/login.php" data-section="nav" data-value="login">Iniciar
                        sesión</a></li>
                <li class="nav-link <?php esconderv2(); ?>"> <a href="../html/signup.php" data-section="nav"
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
            <h1 data-section="cate" data-value="A">
                Fotografía Artística
            </h1>

            <a href="https://wallhaven.cc" class="credit" target="_blank">
                <p data-section="header" data-value="credit">Imagen gracias a Wallhaven.cc</p>
            </a>
        </div>

    </header>
    <!--=================================================================-->
    <!--=================================================================-->
    <main class="main-container">
        <div class="legend-div">
            <h2 data-section="main" data-value="legend">Fotografías compartidas</h2>
        </div>
        <div class="main-content">
        <?php

        $conn =mysqli_connect('localhost', 'root','','photogall');
        $select = mysqli_query($conn, "SELECT Img.route, Img.Name, Img.user_id,
        Usr.Nombre, Usr.Apellido
        FROM `image` Img
        INNER JOIN users Usr ON Img.user_id = Usr.id 
        WHERE Category = 'Arte'
        ORDER BY RAND()");
        while ($filas=mysqli_fetch_assoc($select)){
            ?>
        <div class="colum-content">
            <a href=""><img src="<?php echo $filas["route"]?>" alt="Foto"></a>
            <div class="info"><?php echo $filas["Name"]?><a  href=""><?php echo $filas["Nombre"]?> <?php echo $filas["Apellido"]?></a></div>
        </div>
            <?php
        }
        ?>
        </div>
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