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
          <a class="nav-link js-scroll-trigger" aria-current="page" href="index.php" style="color: aliceblue;"><i class="fa fa-fw fa-home"></i>Home</a>
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
    <section class="jumbotron text-center" style="margin: 0;">
      <img src="Logo.png" alt="Malang Agro Travel" width="100" class="rounded-circle" />
      <h1 class="display-4">Desa Wisata Pujon Kidul</h1>
      <p class="lead">Indahnya Wisata Alam</p>
    </section>  
      <section id="projects">
      <div class="container">
        <div class="card" >
          <div class="gambar">
            <img class="card-img-top" src="pujon kidul.jpg" alt="Card image cap" width="100%" height="500px;">
            <ul>
              <li>
                <button type="button" class="btn" data-toggle="modal" data-target="#modal_map">
                  <img src="petaicon-01.png" alt="">
                </button>
              </li>
              <li>
                <button type="button" class="btn" data-toggle="modal" data-target="#modal_360">
                  <img src="360icon-01.png" alt="">
                </button>
              </li>
            </ul>
          </div>
          <div class="card-body">
              <h5 class="card-title">Deskripsi</h5>
              <p class="card-text" style="text-align: justify; padding-right: 65px">
                Desa Pujon Kidul merupakan tempat agrowisata daerah batu, disana kita disuguhi oleh banyak tempat wisata bertemakan alam yang membuat pengunjung serasa sedang liburan di alam terbuka. Disana terdapat berbagai tempat yang dapat
                kita kunjungi seperti cafe sawah, tempat foto yang sangat instagramable dan masih banyak lagi. Dengan harga tiket yang sangat terjangkau kalian sudah disuguhi dengan keindahan alam yang berlimpah.

              </p>  

              <h5 class="card-title">Jam Buka:</h5>
              
              <p class="card-text">
                <ul>
                  <li>Senin – Jumat  : 08.00 – 17.00 WIB</li>
                  <li>Sabtu – Minggu : 08.00 – 21.00 WIB</li>
                </ul>
              </p>

              <h5 class="card-title">Harga Tiket:</h5>
              <p class="card-text">
                <ul>
                  <li>Makanan: mulai dari Rp 10.000,-</li>
                  <li>Minuman: mulai dari Rp 4.000,-</li>
                  <li>Parkir Motor : Rp 2.000,-</li>
                  <li>Parkir Mobil : Rp 5.000,-</li>
                  <li>Tiket Masuk  : Rp 12.500,-</li>
                </ul>
              </p>

              <h5 class="card-title">Aktivitas yang bisa dinikmati :</h5>
              <div class="slidebaru">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="spot pujon.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="cafe pujon.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="wisata 78 pujon.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="trail.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
      </div>
    </div>

<!-- Modal Map -->
<div class="modal fade bd-example-modal-lg" id="modal_map" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peta View Desa Wisata Pujon Kidul</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-lg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.371014731967!2d112.45311131486362!3d-7.856183594339599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78878faaaaaaab%3A0x4be58f3cd7ca4dfe!2sDesa%20Wisata%20Pujon%20Kidul!5e0!3m2!1sen!2sid!4v1618035955152!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 360 -->
<div class="modal fade bd-example-modal-lg" id="modal_360" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Camera 360 Desa Wisata Pujon Kidul</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal-lg">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1618109294893!6m8!1m7!1sCAoSLEFGMVFpcE84R2ItTXpXUzZ5ZmVUd0h3THA2Vkw4czZsRWwtS25DWk10bGc3!2m2!1d-7.854438900000001!2d112.4539032!3f63.15139761899043!4f-14.734009651465044!5f0.7820865974627469" width="765" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
