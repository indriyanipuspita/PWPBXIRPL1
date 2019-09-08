<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>tugas PWPB</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">
<!-- Bootstrap core CSS -->
      <link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">
  <style>
      .head{
        color: #4b0082;
        font-size: 25;
        font-family: cursive;
      }
      body{
        background-image: url(img/abstrak.png);
        background-size: cover;
      }
      a{
        color: #4b0082;
        font-size: 15;
        font-family: cursive;
      }
      h1{
        color: #4b0082;
        font-family: cursive;
      }
      h3{
        color: #4b0082;
        font-family: cursive;
      }
      h4{
        color: #4b0082;
        font-family: cursive;
      }
      .jumbotron{
        background-image: url(img/hijau.jpg);
        background-size: contain;
      }
      .bg{
        background-image: url(img/progrm.jpg);
        background-size: cover;

      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./Blog Template · Bootstrap_files/css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./Blog Template · Bootstrap_files/blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="head">
        <h2><i>SOFTWARE ENGINEERING</i></h2>
        <a href="index.php">Back..</a>
      </div>
      <div class="col-2 pt-1">
          <a class="text-purple" href="firstproject.php">First Project</a>
        </div>
        <div class="col-2 text-purple">
        <a class="blog-header-logo text-purple" href="secondproject.php">Second Project</a>
        </div>
        <div class="col-2 text-purple">
        <a class="blog-header-logo text-purple" href="#">Third Project</a>
        </div>
      <div class="col-3 d-flex justify-content-end align-items-center">
        <a class="text-green" href="https://getbootstrap.com/docs/4.3/examples/blog/#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="https://getbootstrap.com/docs/4.3/examples/blog/#">Sign up</a>
      </div>
    </div>
  </header>
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-green" href="https://getbootstrap.com/docs/4.3/examples/blog/#"></a>
      <a class="p-2 text-green" href="https://getbootstrap.com/docs/4.3/examples/blog/#"></a>
    </nav>
  </div>
    <div class="jumbotron p-4">
    <div class="col-md-6 px-0">
         <h1 class="display-4 font-italic">Welcome to Second Project🌈</h1>
    </div>
      </div>   
          </div>
              <main role="main" class="container">
            <div class="row">
          <div class="col-md-8 blog-main">
        <h4 class="pb-4 mb-4 font-italic border-bottom">
          “We not a great programmer; We just a good programmer with great habits.” 
          ― Kent Beck
        </h4><br>
    </div>
    <?php
      $gambar_tabung = "img/tabung.gif";
      $L_tabung = "π.r2";
      $K_tabung = "2 x π x r";
      $V_tabung = "π x r2 x t";
      $gambar_kubus = "img/kubus.gif";
      $L_kubus = "6xs2";
      $K_kubus = "12xs";
      $V_kubus = "S3";
      $gambar_bola = "img/bola.gif";
      $L_bola = "4 x π x r2";
      $K_bola = "";
      $V_bola = "4/3 x π x r3";
      $gambar_balok = "img/balok.gif";
      $L_balok = "4/3 x π x r3";
      $K_balok = "4x(p+l+t)";
      $V_balok = "pxlxt";
      $gambar_kerucut= "img/kerucutt.gif";
      $L_kerucut = "l alas+l selimut";
      $K_kerucut = "";
      $V_kerucut = "1/3 x π x r2 x t";
      $gambar_prisma = "img/prisma.gif";
      $L_prisma = "(2xl alas)+(l bidang tegak)";
      $K_prisma= "3s";
      $V_prisma = "1/2xa.sxt.sxt";
      

    ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Tentang Bangun Ruang</h1>
  <p class="lead">Bangun ruang adalah bangun matematika yang mempunyai isi atau Volume.</p>
</div>
<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">TABUNG</h4>
      </div>
      <center>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?php
            echo "<img width='180' height='100' src=$gambar_tabung><br>";
            echo "Luas : $L_tabung<br>";
            echo "Keliling : $K_tabung<br>";
            echo "Volume : $V_tabung<br>";
            ?>
          
          </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">PRISMA</h4>
      </div><br>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?php
            echo "<img width='180' height='100' src=$gambar_prisma><br>";
            echo "Luas : $L_prisma<br>";
            echo "Keliling : $K_prisma<br>";
            echo "Volume : $V_prisma<br>";
            ?>
        </ul>
       <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">BALOK</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
        <?php
            echo "<img width='180' height='100' src=$gambar_balok><br>";
            echo "Luas : $L_balok<br>";
            echo "Keliling : $K_balok<br>";
            echo "Volume : $V_balok<br>";
            ?>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">KERUCUT</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?php
            echo "<img width='180' height='100' src=$gambar_kerucut><br>";
            echo "Luas : $L_kerucut<br>";
            echo "Keliling : $K_kerucut<br>";
            echo "Volume : $V_kerucut<br>";
            ?>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">BOLA</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?php
            echo "<img width='100' height='100' src=$gambar_bola><br>";
            echo "Luas : $L_bola<br>";
            echo "Keliling : $K_bola<br>";
            echo "Volume : $V_bola<br>";
            ?>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">KUBUS</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <?php
            echo "<img width='180' height='100' src=$gambar_kubus><br>";
            echo "Luas : $L_kubus<br>";
            echo "Keliling : $K_kubus<br>";
            echo "Volume : $V_kubus<br>";
            ?>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
      </div>
    </div>
  </div>   
</div>
</center>
</div>
</div>
</div>
</div>
      <div class="blog-post">
        <h2 class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">September, 2019 by <a href="https://getbootstrap.com/docs/4.3/examples/blog/#">PWPB group</a></p>

        <p>Bangun ruang atau disebut juga dengan bangun tiga dimensi yaitu sebuah bangun yang memiliki ruang dan dibatasi oleh sisi-sisi.</p>
        <blockquote>
          <p>Jenis - jenis bangun ruang adalah sebagai berikut :</p>
        </blockquote>
        <p>
          1. Kubus: memiliki 6 sisi yang sama dan sebangun.</p>
          <p>2. Balok: memiliki 6 sisi yang mempunyai ukuran panjang dan lebar.</p>
          <p>3. Prisma: memiliki 6 sisi yang mempunya ukuran panjang dan lebar serta mempunya 2 sisi yang berbentuk segitiga.</p>
          <p>4. Limas: memiliki 5 sisi yang dibangun dengan menggunakan 4 segitiga dan 1 persegi.</p>
          <p>5. Tabung: memiliki 3 sisi dimana 2 sisi dibentuk dari lingkaran dan 1 sisi dibentuk oleh persegi/persegi panjang.</p>
          <p>6. Kerucut: mempunyai alas berupa lingkaran yang kemudian di selimuti oleh lengkungan yang dibentuk lancip.</p>
          <p>7. Bola: merupakan bangun ruang yang dibangun dari dasar lingkaran.</p>
      </div><!-- /.blog-post -->
  <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
        <a href="https://getbootstrap.com/docs/4.3/examples/blog/#">Back to top</a>
        </p>
      </footer>
</main>

</body>
</html>