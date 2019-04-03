<!DOCTYPE html>
<html lang="en">

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
            <a class="nav-link" href="main.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#info">Info</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <?php

      $isbn = $_GET['isbn'];

      require 'includes/dbh.inc.php';
      $sql = "SELECT * FROM Books WHERE ISBN=$isbn";
      $result = mysqli_query($connect,$sql) or die("Bad Query: $sql");

      $row = mysqli_fetch_assoc($result);

      echo "<h1>{$row['Title']}</h1>";
      echo "<p class='lead'>{$row['Author']}</p>";
      echo"<img src='{$row['Photo']}' class='mx-auto d-block' alt='...'>";
    echo"</div>";
  echo"</header>";

  echo"<section id='info'>";
    echo"<div class='container'>";
      echo"<div class='row align-top'>";
        echo"<div class='col-lg-8 mx-auto'>";
          echo"<h2>Book Info</h2>";
          echo"<p class='lead'>Description</p>";
          echo"<p>{$row['Descr']}</p>";
          echo"<p class='lead'>Genre</p>";
          echo"<p>{$row['Genre']}</p>";
          echo"<p class='lead'>Date Published</p>";
          echo"<p>{$row['Year']}</p>";
          ?>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <a class="btn btn-primary btn-large js-scroll-trigger" href="main.html">Rent Book</a>
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
