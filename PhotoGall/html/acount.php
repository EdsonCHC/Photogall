<?php
    include("../php/index.php");
    $id = $_SESSION["user_info"][3];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/PhotoGall/css/acount.css" type="text/css">
    <link rel="icon" href="../multimedia/logo/Favicon.ico" type="icon">
    <title data-section="nav" data-value="account">Cuenta</title>
</head>

<body>
    <header>
        <div class="navbar-container">
            <div class="divheader">
                <img class="logo" src="../multimedia/logo/logo.png" alt="Logo de la pagina">
                <a href="../html/index.php" class="nameh">
                    <img src="../multimedia/logo/Nombre.png" alt="logo">
                </a>
            </div>
            <label class="ib" for="burguer">
                <img src="../multimedia/iconos/label.png" alt="label">
            </label>
            <input type="checkbox" name="hamburger" id="burguer">
            <ul class="nav-menu">
                <!--Menu de aburguesa-->
                <li> <a href="../html/index.php" data-section="nav" data-value="home">Inicio</a></li>
                <li> <a href="../html/login.php" data-section="nav" data-value="login">Iniciar sesión</a></li>
                <li> <a href="../html/signup.php" data-section="nav" data-value="sign up">Registrarse</a></li>
                <li> <a href="../html/acercade.php" data-section="nav" data-value="about">Acerca de</a></li>
                <div id="flags-b" class="flags-b">
                    <div class="flags_item" data-language="es">
                        <img src="../multimedia/img/españa.png" alt="España" class="bandera">
                    </div>
                    <div class="flags_item" data-language="en">
                        <img src="../multimedia/img/British.png" alt="British" class="bandera">
                </div>
            </ul>
            <nav>
                <!--Menu normal-->
                <ul class="ful">
                    <li > <a href=" ../html/index.php" class="nav-link" data-section="nav" data-value="home">Inicio</a>
                    </li>
                    <li class=" <?php esconderv2(); ?>"> <a href="../html/login.php" class="nav-link login" data-section="nav"
                            data-value="login">Iniciar sesión</a></li>
                    <li class=" <?php esconderv2(); ?>"><a href="../html/signup.php" class="nav-link" data-section="nav"
                            data-value="sign up">Registrarse</a></li>
                    <li><a href="../html/acercade.php" class="nav-link" data-section="nav" data-value="about">Acerca
                            de</a></li>
                    <li><a href="../html/acount.php" class="nav-link account"  data-section="nav" data-value="account">Cuenta</a></li>
                    <li><a href="../html/upload.php" class="nav-link"   data-section="nav" data-value="upload">Subir Imagen</a></li>
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
    <main>
        <div class="container">
            <div class="user">
                <div class="dimg">
                    <img src="../multimedia/img/user.png" alt="" style="height: 100%;">
                </div>
                <h2 class="user-name"><?php echo $_SESSION["user_info"][0]?> <?php echo $_SESSION["user_info"][1]?></h2>
            </div>
            <hr>
            <div class="user-info">
                <table class="tb">
                    <tr>
                        <td class="td1" data-section="table" data-value="name">Nombre:</td>
                        <td class="td2"><?php echo $_SESSION["user_info"][0]?></td>
                    </tr>
                    <tr>
                        <td class="td1" data-section="table" data-value="lastName">Apellido:</td>
                        <td class="td2"><?php echo $_SESSION["user_info"][1]?></td>
                    </tr>
                    <tr>
                        <td class="td1" data-section="table" data-value="gender">Genero:</td>
                        <td class="td2"><?php echo $_SESSION["user_info"][2]?></td>
                    </tr>
                </table>
                <a class="button" href="../php/logout.php">Cerrar sesión</a>
            </div>
        </div>
    </main>
    <section class="main-container">
        <div class="legend-div">
            <h2 data-section="main" data-value="legend">Fotografías compartidas</h2>
        </div>
        <div class="main-content">
        <?php

        $conn =mysqli_connect('localhost', 'root','','photogall');
        $select = mysqli_query($conn, "SELECT * FROM `image` WHERE `user_id` = $id");
        while ($filas=mysqli_fetch_assoc($select)){
            ?>
        <div class="colum-content">
            <a href=""><img src="<?php echo $filas["route"]?>" alt="Foto"></a>
            <!-- <div class="info"><a href=""><?php echo $filas["Name"]?></a></div> --><!-- Por el momento no se usa-->
        </div>
            <?php
        }
        ?>
        </div>
    </section>

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