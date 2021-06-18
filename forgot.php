
<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Malang Agro Travel</title>
    <script>
    function valid()
    {
      if(document.forgot.password.value!= document.forgot.confirmpassword.value)
      {
        alert("Password and Confirm Password Field do not match  !!");
        document.forgot.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>
  
  </head>

<body>
<body>
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
              <a class="nav-link js-scroll-trigger" href="about.php" style="color: aliceblue;"><i class="fa fa-fw fa-address-card"></i>About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active js-scroll-trigger" href="login.php"><i class="fa fa-fw fa-user"></i>Register/Login</a>
            </li>
      </ul>
    </div>
  </div>
  <link rel="stylesheet" href="body.css" />
</nav>
    
  <link rel="stylesheet" href="regis.css" />
  <div id="card">
    <div id="card_content">
        <h2>RESET PASSWORD</h2>
    </div>  
    <form  action="forgotact.php" method="POST" class="form" >
    <label for="user-email"> &nbsp;E-mail </label>
        <input id="email" class="form-content" type="email" name="email"  autocomplete="on" required />
        <div class="form-border"></div>
        <br />
        <label for="user-password"> &nbsp;New Password </label>
        <input id="email" class="form-content" type="password" name="newpass"  autocomplete="on" required />
        <div class="form-border"></div>
        <br />
        <label for="user-password"> &nbsp;Confirm Password </label>
        <input id="password" class="form-content" type="password" name="confirmpass" required/>
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="change" value="CHANGE" />
        <a href="login.php" id="register">Back</a>
    </form>

</div>
      <footer>
        <div class="container pb-3 text-center">
          <small>Copyright &copy;2021 - Malang Agro Travel. All Rights Reserved.</small>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
      <!-- <script src="script.js"></script> -->
</body>
<!-- Essential javascripts for application to work-->
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script src="script.js"></script> -->
<script src="login/js/jquery-3.2.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="login/js/plugins/pace.min.js"></script>
</html>
