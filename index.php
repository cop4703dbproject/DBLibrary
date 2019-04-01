<!DOCTYPE html>
<html lang="en">

  <?php
    session_start();
  ?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DB Library</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">DB Library</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to DB Library</h1>
      <p class="lead">The best library ever</p>
      <a class="btn btn-primary btn-large js-scroll-trigger" href="#login">Login</a>
    </div>
  </header>

  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Login</h2>
          <p class="lead">Enter email address and password to login</p>
            <?php //Login Script
             if(isset($_SESSION['StudentEmail'])){
                 echo'<div>Logged init</div>';
             }
             else{
                echo'<form action="includes/login.inc.php" method="post">
                    <div class="form-group">
                      <label>Email address:</label>
                     <input type="email" class="form-control" id="email" name="studentemail">
                    </div>

                     <div class="form-group">
                       <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" name="pwd">
                     </div>
                     <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
                    </form>';
                 }
            ?>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">Please direct all questions and concerns to our support email 
          info@dblibrary.com We thank you for all your help and support.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DBLibrary 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>
</html>
