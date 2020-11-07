<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1b1b1f">
  <a class="navbar-brand" href="index.php">MeetLaguna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Conocenos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Historia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Eventos</a>
      </li>
      <?php if(isset($_SESSION['usuario_id'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="formularioRegistro.php">Cuenta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Cerrar Sesion</a>
        </li>
      <?php elseif(isset($_SESSION['usuario'])): ?>
        <li class="nav-item">
            <a class="nav-link" href="perfil.php">Perfil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Cerrar Sesion</a>
        </li>
      <?php else: ?>    
        <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Iniciar Sesion</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>