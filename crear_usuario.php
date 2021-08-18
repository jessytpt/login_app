<?php 

include("./database/conexion.php"); 
include("usuario.php"); 

// Verificar que no tenga una cuenta
if (isset($_POST['crear_usuario'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)) {
        echo ("El usuario ya tiene una cuenta");
  }else{
      //Si no tiene, crea una cuenta
  
    
    $query = "INSERT INTO users(username,password) VALUES('$username','$password')";
    //$query = "INSERT INTO users(username,password) VALUES('$u','$p')";

    $result = mysqli_query($conn,$query);

    if(!$result){
        die("Query Failed!");
    }
    $_SESSION['message'] = 'Usuario creado!';
    echo "Usuario creado!";
    //header('Location: error.php');
  }
}




?>