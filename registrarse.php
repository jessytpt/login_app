<?php include("./database/conexion.php") ?>

<?php include("./includes/header.php") ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h4>Crea tu cuenta</h4>
        </div>
        <div class="card-body">
          <form action="crear_usuario.php" method="POST">
            <div class="mb-3">
            <label for="username" class="form-label">Usuario:</label>
              <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" autofocus>
            </div>
            <div class="mb-3">
            <label for="username" class="form-label">Contraseña:</label>
            <input type="password" name="password" class="form-control" placeholder="Contraseña">

            </div>
            <div class="mb-3">
            <label for="username" class="form-label">Confirmar contraseña:</label>
            <input type="password" name="repet_password" class="form-control" placeholder="Contraseña">

            </div>
           
            <input type="submit" name="crear_usuario"  class="btn btn-primary" value="Registrarse">

          </form>
        </div>
      </div>
    </div>
  </div>





  <?php include("./includes/footer.php") ?>