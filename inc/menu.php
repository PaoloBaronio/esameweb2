<!-- NAVBAR -->

<nav class="navbar  navbar-expand-lg navbar-dark  justify-content-between">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img class="logoMenu img-fluid logo-nav" src="assets/images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse fontMenu " id="navbarSupportedContent">


      <ul class="nav navbar-nav navbar-right ml-auto">

        <li class="nav-item rounded">
          <a class="nav-link <?php echo ($_SESSION['paginaCorrente'] == 'Portrait') ? 'active' : ''; ?>" href="portrait.php">Portrait</a>
        </li>
        <li class="nav-item rounded">
          <a class=" nav-link <?php echo ($_SESSION['paginaCorrente'] == 'b&w') ? 'active' : ''; ?>" href="b&w.php">B&W</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link <?php echo ($_SESSION['paginaCorrente'] == 'About') ? 'active' : ''; ?>" href="about.php">About</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link <?php echo ($_SESSION['paginaCorrente'] == 'Courses') ? 'active' : ''; ?>" href="courses.php">Courses</a>
        </li>
        <li class="nav-item rounded">
          <a class=" nav-link <?php echo ($_SESSION['paginaCorrente'] == 'Contact') ? 'active' : ''; ?>" href="contact.php">Contact</a>
        </li>

      </ul>


    </div>
  </div>
</nav>