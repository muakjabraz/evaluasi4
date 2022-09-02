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
    <style>
     div.contain {
       width: 960px;
       padding: 10px 50px 50px;
       background-color: white;
       margin: 20px auto;
       box-shadow: 1px 0px 10px, -1px 0px 10px;
     }
     /* ======TABLE====== */
     table {
       border-collapse: collapse;
       border-spacing: 0;
       border: 1px black solid;
       width: 100%
     }
     th,
     td {
       padding: 8px 15px;
       border: 1px black solid;
       text-align: center;
     }
     tr:nth-child(2n+3) {
       background-color: #F2F2F2;
     }
  </style>
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
<footer>
  <div id="bawah">Copyright © 2022-2023 Kelompok 7</div>
</footer>


    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>

<div class="contain">
   <h1 style="text-align: center;">Data Produk Desain</h1>
  <table border="1">
     <tr style="background-color: blue; color: white;">
       <th>ID Produk</th>
       <th>Nama Produk</th>
       <th>Harga Produk</th>
       <th>Kategori</th>
       <th>Gambar</th>
     </tr>
      <?php foreach ($isiTabelProduk as $data) : ?>
        <tr>
          <td><?php echo $data['id_produk']; ?></td>
          <td><?php echo $data['nama_produk']; ?></td>
          <td><?php echo $data['harga_produk']; ?></td>
          <td><?php echo $data['kategori']; ?></td>
          <td><img width="200" title="<?php echo $data['gambar']; ?>" src="image/<?php echo $data['gambar']; ?>"></td>
        </tr>
      <?php endforeach; ?>
   </table>
</div>