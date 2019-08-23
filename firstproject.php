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
        font-family: sans-serif;
      }
      body{
        background-image: url(img/purple.jpg);
        background-size: cover;
      }
      a{
        color: #4b0082;
        font-size: 15;
        font-family: sans-serif;
      }
      h1{
        color: #fafafa;
      }
      h3{
        color: #4b0082;
      }
      .jumbotron{
        background-color: #9370db;
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
      </div>
      <div class="col-2 pt-1">
          <a class="text-purple" href="firstproject.php">First Project</a>
        </div>
        <div class="col-2 text-purple">
        <a class="blog-header-logo text-purple" href="#">Second Project</a>
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
         <h1 class="display-4 font-italic">Let's Introduce our Members.</p>
      <p class="lead mb-0"><a href="https://getbootstrap.com/docs/4.3/examples/blog/#" class="text-white">Continue reading...</a></p>
    </div>
      </div>   
        </div>
          </div>
            </div>
              <main role="main" class="container">
            <div class="row">
          <div class="col-md-8 blog-main">
        <h4 class="pb-4 mb-4 font-italic border-bottom">
          “First, solve the problem. Then, write the code.” – John Johnson
        </h4><br>
    </div><!-- /.blog-main -->
    <aside class="col-md-4 blog-sidebar">
      </div>
    </aside>
  </div>
<?php 
        $nama_ketua = "Indriyani Puspita";
        $umur_ketua = 16;
        $tinggi_ketua = 150;
        $hobby_ketua = "Develop code";
        $citacita_ketua = "System Analyst or Programmer";
        $nama_anggotasatu = "Feby Adetia Maharani";
        $umur_anggotasatu = 15;
        $tinggi_anggotasatu = 150;
        $hobby_anggotasatu = "Berenang";
        $citacita_anggotasatu = "Career Woman";
        $nama_anggotadua = "Muhammad Adam Al Falaq";
        $umur_anggotadua = 16;
        $tinggi_anggotadua = 184;
        $hobby_anggotadua = "Bermain Futsal";
        $citacita_anggotadua = "Programmer";
        $nama_anggotatiga= "Rima Lestari";
        $umur_anggotatiga = 16;
        $tinggi_anggotatiga = 150;
        $hobby_anggotatiga = "Memasak";
        $citacita_anggotatiga = "Membahagiakan orang tua";
          $rata_rata = ($tinggi_ketua + $tinggi_anggotasatu + $tinggi_anggotadua + $tinggi_anggotatiga)/4;
      ?>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Group Leader</h3>
          <p class="card-text mb-auto">
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Nama Lengkap: <?php echo $nama_ketua?></li>
            <li>Umur: <?php echo $umur_ketua?> tahun</li>
            <li>Tinggi Badan: <?php echo $tinggi_ketua?> cm</li>
            <li>Hobby: <?php echo $hobby_ketua?></li>
            <li>Cita-cita: <?php echo $citacita_ketua?></li>
          </ul>
        </div>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" "img src="img/indri.png">
        </div>
      </div>
    </div>
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
             <h3 class="mb-0">First Member</h3>
          <p class="card-text mb-auto">          
            <ul class="list-unstyled mt-3 mb-5">
            <li>Nama Lengkap: <?php echo $nama_anggotasatu?></li>
            <li>Umur: <?php echo $umur_anggotasatu?> tahun</li>
            <li>Tinggi Badan : <?php echo $tinggi_anggotasatu?> cm</li>
            <li>Hobby: <?php echo $hobby_anggotasatu?></li>
            <li>Cita-cita: <?php echo $citacita_anggotasatu?></li>
          </ul></p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" "img src="img/feby.jpg">
        </div>
      </div>
    </div>
      <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
             <h3 class="mb-0">Second Member</h3>
          <p class="card-text mb-auto">          
            <ul class="list-unstyled mt-3 mb-5">
            <li>Nama Lengkap: <?php echo $nama_anggotadua?></li>
            <li>Umur: <?php echo $umur_anggotadua?> tahun</li>
            <li>Tinggi Badan : <?php echo $tinggi_anggotadua?> cm</li>
            <li>Hobby: <?php echo $hobby_anggotadua?></li>
            <li>Cita-cita: <?php echo $citacita_anggotadua?></li>
          </ul></p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" "img src="img/adam.jpg">
        </div>
      </div>
    </div>
             <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
             <h3 class="mb-0">Third Member</h3>
          <p class="card-text mb-auto">          
            <ul class="list-unstyled mt-3 mb-5">
            <li>Nama Lengkap: <?php echo $nama_anggotatiga?></li>
            <li>Umur: <?php echo $umur_anggotatiga?> tahun</li>
            <li>Tinggi Badan : <?php echo $tinggi_anggotatiga?> cm</li>
            <li>Hobby: <?php echo $hobby_anggotatiga?></li>
            <li>Cita-cita: <?php echo $citacita_anggotatiga?></li>
          </ul></p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="bd-placeholder-img" width="200" height="250" "img src="img/rima.jpg">
        </div>
      </div>
    </div>
      <center>Rata-rata tinggi badan = <?php echo $rata_rata?> cm</center>
</main><!-- /.container -->
<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="https://getbootstrap.com/docs/4.3/examples/blog/#">Back to top</a>
  </p>
</footer>
</body>
</html>