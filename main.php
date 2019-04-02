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
            <a class="nav-link js-scroll-trigger" href="#books">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#rentals">Rentals</a>
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
      <a class="btn btn-primary btn-large js-scroll-trigger" href="#books">View Books</a>
    </div>
  </header>

    
 <section id="books">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Avaliable books</h2>
            

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Cover</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Year</th>
                    <th scope="col">Genre</th>
                  </tr>
                </thead>
                <tbody>


                  <?php //Display Available Books
                  require 'includes/dbh.inc.php';
                  $sql = "SELECT * FROM Books WHERE Availability=1";
                  $result = mysqli_query($connect,$sql) or die("Bad Query: $sql");
                  
                   
                    
                  while($row = mysqli_fetch_assoc($result)){
                    echo"<tr class='clickable-row' data-href='book.html'>";
                      echo"<td><img src='images/hitchhikersguide.jpeg' class='small-img'></td>";
                      echo"<td>{$row['Title']}</td>";
                      echo"<td>{$row['Author']}</td>";
                      echo"<td>{$row['Year']}</td>";
                      echo"<td>{$row['Genre']}</td>";
                    echo"</tr>";
                  }
                  ?>

                </tbody>
              </table>
            
        </div>
      </div>
    </div>
    <div class="container text-center">
      <a class="btn btn-primary btn-large js-scroll-trigger" href="#rentals">View Rentals</a>
    </div>
  </section>
    

  <section id="rentals" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Current Rentals</h2>

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Cover</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Year</th>
                <th scope="col">Genre</th>
              </tr>
            </thead>
            <tbody>

              <?php //Display Available Books
              require 'includes/dbh.inc.php';
              $sql = "SELECT * FROM Books WHERE Availability=0";
              $result = mysqli_query($connect,$sql) or die("Bad Query: $sql");
              
               
                
              while($row = mysqli_fetch_assoc($result)){
                echo"<tr class='clickable-row' data-href='book.html'>";
                  echo"<td><img src='images/hitchhikersguide.jpeg' class='small-img'></td>";
                  echo"<td>{$row['Title']}</td>";
                  echo"<td>{$row['Author']}</td>";
                  echo"<td>{$row['Year']}</td>";
                  echo"<td>{$row['Genre']}</td>";
                echo"</tr>";
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <a class="btn btn-primary btn-large js-scroll-trigger" href="#contact">Contact Us</a>
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

  <script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
  </script>

</body>

</html>
