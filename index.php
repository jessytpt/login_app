<?php include("./database/conexion.php") ?>

<?php include("./includes/header.php") ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3>INSTITUTO UNIVERSITARIO ESPAÑA</h3>
        </div>
        <div class="card-body">
          <!-- ADD TASK FORM -->
          <form action="logica.php" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Usuario:</label>
              <input type="text" name="username" class="form-control" placeholder="DNI" autofocus>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contaseña:</label>
              <input type="password" name="password" class="form-control" >
            </div>
            <input type="submit" name="iniciar_sesion" class="btn btn-primary" value="Iniciar Sesión">
          <input type="submit" name="registrarse" class="btn btn-link" value="Registrarse">
          </form>
        </div>
      </div>
    </div>
  </div>




<?php include("./includes/footer.php") ?>