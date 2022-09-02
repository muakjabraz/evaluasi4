<?php 
session_start(); 
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Kelompok 7</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $("#hide").click(function(){
        $("#p1").hide();
      });
      $("#btn1").click(function(){
        $("#p1").show();
      }); 
    });
    $(document).ready(function(){
      $("#hide2").click(function(){
        $("#p2").hide();
      });
      $("#btn2").click(function(){
        $("#p2").show();
      }); 
    });
    $(document).ready(function(){
      $("#hide3").click(function(){
        $("#p3").hide();
      });
      $("#btn3").click(function(){
        $("#p3").show();
      }); 
    });

    function showProduk(str){
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "getProduk.php?q=" + str, true);
      xmlhttp.send();
      }

      function showProduk2(str){
      if (str == "") {
        document.getElementById("txtHint2").innerHTML = "";
        return;
      }
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint2").innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "getProduk2.php?q=" + str, true);
      xmlhttp.send();
      }

      function showProduk3(str){
      if (str == "") {
        document.getElementById("txtHint3").innerHTML = "";
        return;
      }
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint3").innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "getProduk3.php?q=" + str, true);
      xmlhttp.send();
      }
    </script>
  </head>
  <body> 
  
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand font-weight-bold text-white" href="index.php">Studio</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <?php if (!isset($_SESSION['status'])) { ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-tigger text-white" href="#download">DOWNLOAD</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#tutorial" role="button" data-toggle="dropdown" aria-expanded="false">
              TUTORIAL
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">TUTOR 1</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">TUTOR 2</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">TUTOR 3</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-tigger text-white" href="#artikel">ARTIKEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-tigger text-white" href="#hubungi_kami">HUBUNGI KAMI</a>
          </li>
          <?php }else{ ?>
            <?php if ($_SESSION['role']=='user') { ?>
              <li class="nav-item">
                <a class="nav-link js-scroll-tigger text-white" href="#download">DOWNLOAD</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#tutorial" role="button" data-toggle="dropdown" aria-expanded="false">
                  TUTORIAL
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">TUTOR 1</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">TUTOR 2</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">TUTOR 3</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-tigger text-white" href="#artikel">ARTIKEL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-tigger text-white" href="#hubungi_kami">HUBUNGI KAMI</a>
              </li>
            <?php }else{ ?>
              <li class="nav-item">
                <a class="nav-link js-scroll-tigger text-white" href="controller_produk.php">PRODUK</a>
              </li>
            <?php } ?>
          <?php } ?>
          <?php
            if (!isset($_SESSION['status'])){
              echo '<a class="nav-link js-scroll-tigger text-white" href="#daftar">DAFTAR</a>';                 
              echo '<a class="nav-link js-scroll-tigger text-white" href="loginTugas.php">LOGIN</a>';        
              
            }
            else {
              if ($_SESSION['role']=='user') {
                echo '<a class="nav-link js-scroll-tigger text-white" href="#daftar">'.$_SESSION['username'].'</a>';
                echo '<a class="nav-link js-scroll-tigger text-white" href="logoutTugas.php">LOGOUT</a>';
              } else{
                echo '<a class="nav-link js-scroll-tigger text-white" href="#daftar">'.$_SESSION['username'].'</a>';
                echo '<a class="nav-link js-scroll-tigger text-white" href="logoutTugas.php">LOGOUT</a>';
              }
            }
          ?>
        </ul>
      </div>
      </div>
  </nav>

  <?php if (!isset($_SESSION['status'])) {?>
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-4">EXPLORE YOUR <br> <span class="font-weight-bold">SELF</span></h1>
      <hr class="'my-4">
      <p class="lead">Produk Jasa Desain</p>
      <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
    </div>
  </div>
  <?php }else{ ?>
    <?php if ($_SESSION['role']=='user') {?>
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">EXPLORE YOUR <br> <span class="font-weight-bold">SELF</span></h1>
          <hr class="'my-4">
          <p class="lead">Produk Jasa Desain</p>
          <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button">KUNJUNGI</a>
        </div>
      </div>
    <?php }else{ ?>
      <div class="jumbotron">
    <div class="container">
      <h1 class="display-4"><span class="font-weight-bold">ADMIN</span></h1>
      <hr class="'my-4">
      <p class="lead">Produk Jasa Desain</p>
    </div>
  </div>
    <?php } ?>
  <?php } ?>

  <?php if (!isset($_SESSION['status'])) { ?>
<section>
  <div class="container text-center">
      <div class="text-center" id="judul">
        <h1> Layanan Jasa Desain Kami</h1>
      </div>
      <div class="card" id="card1">
        <div class="card-body">
          <h3>Desain Logo Perusahaan</h3>
          <img class="menuimg" src="img/1.png" alt="menu">
          <button class="btn btn-primary" id="btn1">Lihat</button>
          <button class="btn btn-primary" id="hide">Tutup</button>
          <p id="p1">Desain logo untuk kebutuhan usaha dan pemasaran produk atau perusahaan</p>
        </div>
      </div>
      <div class="card" id="card2">
        <div class="card-body">
          <h3>Desain Logo Brand</h3>
          <img class="menuimg" src="img/2.png" alt="menu">
          <button class="btn btn-primary" id="btn2">Lihat</button>
          <button class="btn btn-primary" id="hide2">Tutup</button>
          <p class="card-text" id="p2"> Desain website terima jadi dengan desain berkualitas dan cepat untuk mengembangkan usaha anda </p>
        </div>
      </div>
      <div class="card" id="card3">
        <div class="card-body">
          <h3>Desain Logo Custom</h3>
          <img class="menuimg" src="img/3.png" alt="menu">
          <button class="btn btn-primary" id="btn3">Lihat</button>
          <button class="btn btn-primary" id="hide3">Tutup</button>
          <p class="card-text" id="p3">
            <?php
            $text = ["Kami", "juga", "melayani", "berbagai", "kebutuhan", "desain", "kustom", "untuk", "usaha", "anda"];
              foreach($text as $txt){
              echo "$txt";
              echo " ";
              }
            ?>
          </p>
        </div>
      </div>        
  </div>
</section>
  <?php }else{ ?>
    <?php if ($_SESSION['role']=='user'){?>
      <section>
        <div class="container text-center">
            <div class="text-center" id="judul">
              <h1> Layanan Jasa Desain Kami</h1>
            </div>
            <div class="card" id="card1">
              <div class="card-body">
                <h3>Desain Logo Perusahaan</h3>
                <img class="menuimg" src="img/1.png" alt="menu">
                <br>
                <form>
                  <select name="produk_desain" onchange="showProduk(this.value)" style="text-align: center;">
                    <option value="">Tutup</option>
                    <option value="1">Lihat</option>
                  </select>
                </form>
                <br>
                <div id="txtHint"><b>Data akan ditampilkan di sini</b></div>
              </div>
            </div>
            <div class="card" id="card2">
              <div class="card-body">
                <h3>Desain Logo Website</h3>
                <img class="menuimg" src="img/2.png" alt="menu">
                <br>
                <form>
                  <select name="produk_desain" onchange="showProduk2(this.value)" style="text-align: center;">
                    <option value="">Tutup</option>
                    <option value="2">Lihat</option>
                  </select>
                </form>
                <br>
                <div id="txtHint2"><b>Data akan ditampilkan di sini</b></div>
              </div>
            </div>
            <div class="card" id="card3">
              <div class="card-body">
                <h3>Desain Logo Custom</h3>
                <img class="menuimg" src="img/3.png" alt="menu">
                <br>
                <form>
                  <select name="produk_desain" onchange="showProduk3(this.value)" style="text-align: center;">
                    <option value="">Tutup</option>
                    <option value="3">Lihat</option>
                  </select>
                </form>
                <br>
                <div id="txtHint3"><b>Data akan ditampilkan di sini</b></div>
              </div>
            </div>        
        </div>
      </section>
    <?php }else{ ?>
      <h1 style="text-align: center;">Haloo....</h1>
    <?php } ?>
  <?php } ?>
<footer>
  <div id="bawah">Copyright © 2022-2023 Kelompok 7</div>
</footer>


    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>