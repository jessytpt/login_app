<?php include("conexion.php") ?>

<?php include("header.php") ?>

<div>
<h1>Formulario de registro</h1>
<form action="crear_usuario.php" method="POST">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" autofocus>
          </div>
          <div class="form-group">
          <input type="text" name="password" class="form-control" placeholder="Contraseña" >
            
          </div>
          <input type="submit" name="crear_usuario" value="Crear Usuario">
          
        </form>
</div>

<?php include("footer.php") ?>