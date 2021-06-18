<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="body.css">

    <title>Malang Agro Travel</title>

</head>

<body id="home">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainnav" style="background-color: #61b9f8;">
        <div class="container">
            <a class="navbar-brand" href="#mainnav">MALANG AGRO TRAVEL</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-tabs ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" aria-current="page" href="index.php"
                            style="color: aliceblue;"><i class="fa fa-fw fa-home"></i>Home</a>
                    </li>
                    <div class="dropdown">
                        <a class="dropbtn nav-link dropdown-toggle color" style="color: aliceblue;"><i
                                class="fa fa-fw fa-search"></i>Info Wisata</a>
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
                        <a class="nav-link active" href="tiket.php"><i class="fa fa-fw fa-credit-card"></i>Booking</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="about.php" style="color: aliceblue;"><i
                                class="fa fa-fw fa-address-card"></i>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="logout.php" style="color: aliceblue;"><i
                                class="fa fa-fw fa-user"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <link rel="stylesheet" href="tiket.css">
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Malang Agro Travel Booking Form</h1>
                        </div>
                        <form method="POST" action="payment.php">
                            <div class="form-group"> <input class="form-control" type="text" placeholder="Masukan Nama"
                                    name="nama"> <span class="form-label">Nama</span> </div>
                            <div><input class="form-control" type="date" placeholder="Tanggal Booking" name="tanggal">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <select class="form-control" required name="destinasi">
                                            <option value="" selected hidden>Destinasi</option>
                                            <option value="Kusuma Agrowisata">Kusuma Agro Wisata</option>
                                            <option value="Petik Apel">Petik Apel</option>
                                            <option value="Kebun Teh Wonosari">Kebun Teh Wonosari</option>
                                            <option value="Desa Wisata Pujon Kidul">Desa Wisata Pujon Kidul</option>
                                            <option value="Lumbung stroberi">Lumbung Stroberi</option>
                                            <option value="Petik Madu">Petik Madu</option>
                                        </select> <span class="select-arrow"></span> <span
                                            class="form-label">Destinasi</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <select class="form-control" required name="paket">
                                            <option value="" selected hidden>Paket Wisata</option>
                                            <option value="Kusuma Paket Hore">Kusuma Paket Hore</option>
                                            <option value="Kusuma Paket Boom">Kusuma Paket Boom</option>
                                            <option value="Kusuma Petik Apel">Kusuma Petik Apel</option>
                                            <option value="Petik Madu + Tour">Petik Madu + Tour</option>
                                            <option value="Pujon Paket Komplit">Pujon Paket Komplit</option>
                                            <option value="Wonosari Tea + Tour">Wonosari Tea + Tour</option>
                                            <option value="Petik Stroberi + Tour">Petik Stroberi + Tour</option>

                                        </select> <span class="select-arrow"></span> <span class="form-label">Paket
                                            Wisata</span> </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control" type="number" placeholder="Jumlah Tiket" required
                                    name="jumlah"><span class="form-label">Jumlah Tiket</span>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"> <input class="form-control" type="email"
                                            placeholder="Masukkan Email" name="email"> <span
                                            class="form-label">Email</span> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <input class="form-control" type="tel"
                                            placeholder="Masukkan no.telp" name="no"> <span
                                            class="form-label">Phone</span> </div>
                                </div>
                            </div>
                            <div class="form-btn"> <button class="submit-btn">Pesan Sekarang</button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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