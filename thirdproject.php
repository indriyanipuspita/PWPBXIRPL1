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
      h2{
        font-family: cursive;
        color: #4b0082;
      }
      h3{
        color: #4b0082;
        font-family: cursive;
      }
      h4{
        color: #4b0082;
        font-family: cursive;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .box{
        border-radius: 25px;
        border: 10px;
        padding: 50px;
        margin: 15px;
        box-shadow: 4px 5px 7px 6px ;
      }
      .isi{
        margin-left: 145px;
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
        <a class="blog-header-logo text-purple" href="thirdproject.php">Third Project</a>
        </div>
      <div class="col-3 d-flex justify-content-end align-items-center">
        <a class="text-green" href="https://getbootstrap.com/docs/4.3/examples/blog/#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="https://getbootstrap.com/docs/4.3/examples/blog/#">Sign up</a>
      </div>
    </div>
    <div class="box">
      <center>
      <h1>Data Identitas Peserta Didik Baru<br>
      Tahun Ajaran 2019/2020</h1>
    </center>
    <table border="0">
    <form action="" method="POST" name="form">
       
       Nama Lengkap :
       <input type="text" name="nm" placeholder="Masukkan nama"><br>
       Nama panggilan:
       <input type="text" name="np" placeholder="Nama panggilan"><br>
       Jenis Kelamin :<br>
       <input type="radio" value="Laki-laki"name="jk">Laki-laki<br>
       <input type="radio" value="Perempuan"name="jk">Perempuan<br>
       NISN :
       <input type="text" name="nisn" placeholder="Masukkan NISN"><br>
       NIK :
       <input type="text" name="nik" placeholder="Masukkan NIK"><br>
       Tempat dan Tanggal Lahir :
       <input type="text" name="tmpt" placeholder="Tempat lahir">
       <input type="date" name="tl"><br>
       Asal Sekolah :
       <input type="text" name="as" placeholder="Asal sekolah"><br>
       Nomor SKHUN :
       <input type="text" name="skhun" placeholder="Masukkan SKHUN"><br>
       Tanggal diterima di sekolah ini :
       <input type="date" name="tgl"><br>
       Jika pindahan sebutkan alasan pindah :<br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="alasan" placeholder="Masukkan Alasannya"></textarea><br>
       Agama :
       <select name="ag">
          <option value="Islam">Islam</option><br>
          <option value="Kristen">Kristen</option><br>
          <option value="Katolik">Katolik</option><br>
          <option value="Budha">Budha</option><br>
          <option value="Hindu">Hindu</option><br>
          <option value="Protestan">Protestan</option><br>
        </select><br>
        Alamat Rumah :<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="alm" placeholder="Masukkan Alamat"></textarea><br>
        Tinggal Bersama :<br>
        <input type="radio" value="Orang tua" name="tb">Orang tua<br>
        <input type="radio" value="Wali" name="tb">Wali<br>
        Transportasi :<br>
        <input type="radio" value="Angkutan umum" name="tp">Angkutan umum<br>
        <input type="radio" value="Motor" name="tp">Motor<br>
        <input type="radio" value="Jalan kaki" name="tp">Jalan kaki<br>
        Nomor Telpon :
        <input type="text" name="nt" placeholder="Masukkan nomor"><br>
        Nomor Handphone :
        <input type="text" name="nh" placeholder="Nomor handphone"><br>
        Nomor KPS bagi yang memiliki :
        <input type="text" name="kps" placeholder="Masukan nomor"><br>
        <b>Data Ayah Kandung :<br></b>
        Nama :
        <input type="text" name="na" placeholder="Masukan nama ayah"><br>
        Tahun Lahir :
        <input type="text" name="tl" placeholder="masukkan tahun lahir"><br>
        Pendidikan :<br>
        <input type="radio" value="SD" name="p">SD<Br>
        <input type="radio" value="SMP" name="p">SMP<Br>
        <input type="radio" value="SMA/SMK" name="p">SMA/SMK<br>
        Pekerjaan :
        <input type="text" name="pk" placeholder="pekerjaan ayah"><br>
        Penghasilan perbulan :<br>
        <input type="radio" value="< Rp 1.000.000,00" name="pp"> < Rp 1.000.000,00<br>
        <input type="radio" value="> Rp 1.000.000,00" name="pp"> > Rp 1.000.000,00<br>
        <input type="radio" value="< Rp 3.000.000,00" name="pp">< Rp 3.000.000,00<br>
        <b>Data Ibu Kandung :<br></b>
        Nama :
        <input type="text" name="ni" placeholder="Masukan nama ibu"><br>
        Tahun Lahir :
        <input type="text" name="tlh" placeholder="masukkan tahun lahir"><br>
        Pendidikan :<br>
        <input type="radio" value="SD" name="pn">SD<br>
        <input type="radio" value="SMP" name="pn">SMP<br>
        <input type="radio" value="SMA/SMK" name="pn">SMA/SMK<br>
        Pekerjaan :
        <input type="text" name="pkr" placeholder="pekerjaan ibu"><br>
        Penghasilan perbulan :<br>
        <input type="radio" value="< Rp 1.000.000,00" name="ppb"> < Rp 1.000.000,00<br>
        <input type="radio" value="> Rp 1.000.000,00" name="ppb"> > Rp 1.000.000,00<br>
        <input type="radio" value="< Rp 3.000.000,00" name="ppb"> < Rp 3.000.000,00<br>
      <center>
      <input type="submit" value="simpan" name="spn">
      <input type="reset" value="batal" name="btl"><br>
    </center>
      </table>
  </form>
  </div>
</div>
<div class="isi">
  
      <?php
        if (isset($_POST['spn'])){
          echo "<center>
      <h1>Data Identitas Peserta Didik Baru<br>
      Tahun Ajaran 2019/2020</h1>
    </center>";
          echo "<br>Nama Lengkap:" .$_POST['nm'];
          echo "<br>Nama Panggilan:" .$_POST['np'];
          echo "<br>Jenis Kelamin:" .$_POST['jk'];
          echo "<br>NISN:" .$_POST['nisn'];
          echo "<br>NIK:" .$_POST['nik'];
          echo "<br>Tempat dan Tanggal Lahir:" .$_POST['tgl'];
          echo "<br>Asal Sekolah:" .$_POST['as'];
          echo "<br>Nomor SKHUN:" .$_POST['skhun'];
          echo "<br>Jika diterima di sekolah ini masukkan alasan:" .$_POST['alasan'];
          echo "<br>Agama:" .$_POST['ag'];
          echo "<br>Alamat:" .$_POST['alm'];
          echo "<br>Tinggal Bersama:" .$_POST['tb'];
          echo "<br>Transportasi:" .$_POST['tp'];
          echo "<br>Nomor Telpon:" .$_POST['nt'];
          echo "<br>Nomor Handphone:" .$_POST['nh'];
          echo "<br>Nama :" .$_POST['na'];
          echo "<br>Tahun Lahir :" .$_POST['tl'];
          echo "<br>Pendidikan :" .$_POST['p'];
          echo "<br>Pekerjaan :" .$_POST['pk'];
          echo "<br>Penghasilan perbulan :" .$_POST['pp'];
          echo "<br>Nama :" .$_POST['ni'];
          echo "<br>Tahun Lahir:" .$_POST['tlh'];
          echo "<br>Pendidikan:" .$_POST['pn'];
          echo "<br>Pekerjaan:" .$_POST['pkr'];
          echo "<br>Penghasilan perbulan :" .$_POST['ppb'];

      }  ?>
    </div>

    <footer class ="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
        <a href="https://getbootstrap.com/docs/4.3/examples/blog/#">Back to top</a>
        </p>
      </footer>
</body>
</html>