<?php include("conexion.php") ?>

<?php include("header.php") ?>

<div >
    <form action="logica.php" method="POST">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" autofocus>
          </div>
          <div class="form-group">
          <input type="text" name="password" class="form-control" placeholder="Contraseña" >
            
          </div>
          <input type="submit" name="iniciar_sesion" class="btn btn-success btn-block" value="Iniciar Sesión">
          <input type="submit" name="registrarse" class="btn btn-success btn-block" value="Registrarse">
        </form>
</div>

<?php include("footer.php") ?>
