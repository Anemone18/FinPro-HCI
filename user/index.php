<?php
    session_start();
    if (!isset($_SESSION['log'])){
        header("Location: ../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="body.css">
  
    <title>Malang Agro Travel</title>
  </head>
  <body id="home">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainnav" style="background-color: #61b9f8;">
  <div class="container">
  <a class="navbar-brand" href="#mainnav">MALANG AGRO TRAVEL</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav nav-tabs ml-auto">
        <li class="nav-item">
          <a class="nav-link active js-scroll-trigger" aria-current="page" href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
        </li>
        <div class="dropdown">
                <a class="dropbtn nav-link dropdown-toggle color" style="color: aliceblue;"><i class="fa fa-fw fa-search"></i>Info Wisata</a>
                <div class="dropdown-content">
                  <ul>
                    <li><a href="pujon.php">Desa Wisata Pujon Kidul</a></li>
                    <li><a href="Stroberi.php">Lumbung strawberry</a></li>
                    <li><a href="kusuma.php">Kusuma Agrowisata</a></li>
                    <li><a href="petikmadu.php">Petik Madu</a></li>
                    <li><a href="petikapel.php">Wisata Petik Apel</a></li>
                    <li><a href="tea.php">Wisata Teh Wonosari</a></li>
                  </ul>
                  
                </div>
            </div>
            <li class="nav-item ">
              <a class="nav-link js-scroll-trigger" href="tiket.php" style="color: aliceblue;"><i class="fa fa-fw fa-credit-card"></i>Booking</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link js-scroll-trigger" href="about.php" style="color: aliceblue;"><i class="fa fa-fw fa-address-card"></i>About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php" style="color: aliceblue;"><i class="fa fa-fw fa-user"></i>Logout</a>
            </li>
      </ul>
    </div>
  </div>
</nav>
    <section class="jumbotron text-center">
      <img src="Logo.png" alt="Malang Agro Travel" width="100" class="rounded-circle" />
      <h1 class="display-4">Malang Agro Travel</h1>
      <p class="lead">The Best Agro Tour In Malang</p>
    </section>  
      <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col text-center">
            <h2>Pilihan Paket Wisata Yang Kami Sediakan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="pujon kidul.jpg" class="card-img-top" alt="Project 1" />
              <div class="card-body text-center"><a class="btn btn-light" href="pujon.php" role="button">Desa Wisata Pujon</a></div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="lumbung.jpg" class="card-img-top" alt="Project 2" />
              <div class="card-body text-center"><a class="btn btn-light" href="stroberi.php" role="button">Lumbung Strawberry</a></div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="agro wisata kusuma.jpg" class="card-img-top" alt="Project 3" />
              <div class="card-body text-center"><a class="btn btn-light" href="kusuma.php" role="button">Kusuma Agrowisata</a></div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="apel petik.jpg" class="card-img-top" alt="Project 4" />
              <div class="card-body text-center"><a class="btn btn-light" href="petikapel.php" role="button">Petik Apel</a></div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <a href="tea.html"><img src="teh wono.jpg" class="card-img-top" alt="Project 5" /></a>
              <div class="card-body text-center"><a class="btn btn-light" href="tea.php" role="button">Wisata Teh Wonosari</a></div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="petikmadu.jpg" class="card-img-top" alt="Project 6"  />
              <div class="card-body text-center"><a class="btn btn-light" href="petikmadu.php" role="button">Petik Madu</a></div>
            </div>
          </div>
      </div>
      
  </div>
     
  </div>
 
</div>

    </section>
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Contact Us</h2>
            <p>Instagram: @malangagrotravel</p>
          </div>
        </div>
        <div class="row justify-content-center mb-3">
          
        </div>
        <br />
        <br />
      </div>
    </section>
    <footer>
      <div class="container pb-3 text-center">
        <small>Copyright &copy;2021 - Malang Agro Travel. All Rights Reserved.</small>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <!-- <script src="script.js"></script> -->
  </body>
</html>
