<?php include("conexion.php"); 

if (isset($_POST['iniciar_sesion'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)) {
        //$row = mysqli_fetch_array($result);
        //$username_p = $row['username'];
        //$password_p = $row['password'];
        header('Location: cuenta.php');
  }else{
    header('Location: error.php');
  }

}

if (isset($_POST['registrarse'])) {
    header('Location: registrarse.php');
}
    

?>

