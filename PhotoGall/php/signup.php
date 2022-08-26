<?php
//OBTENCIÓN DE DATOS
       $nombre = $_POST['Name'];
       $apellido = $_POST['Surname'];
       $email = $_POST['Email'];
       $gender = $_POST['gender'];
       $password = $_POST['Password'];

       if(buscarRepetido($email) == 1) {
 
        echo "<script> alert('El Correo ingresado ya existe, por favor ingresa otro...');
        window.location.href='../html/signup.php';
        </script>";
       }
       else{

        //CONEXIÓN
        $conn = new mysqli('localhost', 'root', '', 'photogall');

        if ($conn->connect_error) {
        die("conexión fallida: ".$conn->connect_error); 
        }
        else {

        $stmt = $conn->prepare("INSERT INTO users(`Nombre`, `Apellido`, `Gender`, `Email`, `Password`) 
        VALUES (?,?,?,?,?)"); 

        $stmt->bind_param("sssss", $nombre, $apellido, $gender, $email, $password); 
        sleep(1);
        $stmt->execute();
        $stmt->close();
        $conn->close();
         $mensaje ="Registro exitoso, Ya puedes iniciar sesión";
        echo "<script> alert('$mensaje');
        window.location.href='../html/login.php';
        </script>";
       }
       
       }
      
        function buscarRepetido($email){
                
        $conn = new mysqli('localhost', 'root', '', 'photogall');
        $search = $conn->prepare("SELECT * FROM users WHERE Email = ?");
        $search->bind_param("s", $email);
        $search->execute();
        $result=$search->get_result();

        if($result-> num_rows > 0){
                return 1;
        }else{
                return 0;
        }

       }

?>
