<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1b1b1f">
  <a class="navbar-brand" href="index.php">MeetLaguna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <?php if($pageActive =='index'): ?>
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Inicio</a>
      </li>
      <?php else: ?>
        <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <?php endif; ?>


      <?php if($pageActive =='conocenos'): ?>
        <li class="nav-item">
        <a class="nav-link active" href="#">Conocenos</a>
      </li>
      <?php else: ?>
        <li class="nav-item">
        <a class="nav-link" href="#">Conocenos</a>
      </li>
      <?php endif; ?>

      <?php if($pageActive =='historia'): ?>
        <li class="nav-item">
        <a class="nav-link active" href="#">Historia</a>
      </li>
      <?php else: ?>
        <li class="nav-item">
        <a class="nav-link" href="#">Historia</a>
      </li>
      <?php endif; ?>

      <?php if($pageActive =='eventos'): ?>
        <li class="nav-item">
        <a class="nav-link active" href="#">Eventos</a>
      </li>
      <?php else: ?>
        <li class="nav-item">
        <a class="nav-link" href="#">Eventos</a>
      </li>
      <?php endif; ?>

      <?php if(isset($_SESSION['usuario'])): ?>

        <?php if($pageActive =='perfil'): ?>
          <li class="nav-item">
          <a class="nav-link active" href="perfil.php">Perfil</a>
        </li>
        <?php else: ?>
          <li class="nav-item">
          <a class="nav-link" href="perfil.php">Perfil</a>
        </li>
        <?php endif; ?>

        <?php if($pageActive =='logout'): ?>
          <li class="nav-item">
          <a class="nav-link active" href="logout.php">Cerrar Sesion</a>
        </li>
        <?php else: ?>
          <li class="nav-item">
          <a class="nav-link" href="logout.php">Cerrar Sesion</a>
        </li>
        <?php endif; ?>

      <?php else: ?>    

        <?php if($pageActive =='registro'): ?>
          <li class="nav-item">
          <a class="nav-link active" href="registro.php">Registro</a>
        </li>
        <?php else: ?>
          <li class="nav-item">
          <a class="nav-link" href="registro.php">Registro</a>
        </li>
        <?php endif; ?>

        <?php if($pageActive =='login'): ?>
          <li class="nav-item">
          <a class="nav-link active" href="login.php">Iniciar Sesion</a>
        </li>
        <?php else: ?>
          <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar Sesion</a>
        </li>
        <?php endif; ?>

      <?php endif; ?>
      
    </ul>
  </div>
</nav>