<?php
    //Datos
    session_start();
    $nombreImagen = $_POST['Name'];
    $lugarImagen = $_POST['Lugar'];
    $CateImagen = $_POST['categoría'];
    $Nombre_imagen =$_FILES['Subir']['name'];
    $Nombre_temporal =$_FILES['Subir']['tmp_name'];
    $carpeta = '../multimedia/db-img';
    $ruta = $carpeta.'/'.$Nombre_imagen;
    $userId = $_SESSION['user_info']['3'];

    move_uploaded_file($Nombre_temporal, $carpeta.'/'.$Nombre_imagen);

    $conn = new mysqli('localhost', 'root', '', 'photogall');
    if($conn->connect_error){
        die("conexión fallida: ".$conn->connect_error); 
    }else{
        $stmt = $conn->prepare("INSERT INTO `image`(`user_id`, `Name`, `PLace`, `Category`, `route`) 
        VALUES (?,?,?,?,?)"); 
        $stmt->bind_param("sssss",$userId, $nombreImagen, $lugarImagen, $CateImagen, $ruta);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        $mensaje ="Imagen subida correctamente";
        echo "<script> alert('$mensaje');
        window.location.href='../html/upload.php';
        </script>";
    }
?>