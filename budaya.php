<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Budaya</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="features.css" rel="stylesheet">
</head>
<body>

<main>

header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" height="50">
<div class="container-fluid">
  <a class="navbar-brand">WonderMalang</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
      <li class="nav-item">
        <a class="nav-link"  href="jenis.html">Kembali</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="budaya.php">Budaya</a>
      </li>
    </ul>
  </div>
</div>
</nav>
</header>
<br><br>
<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-1">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Wisata Budaya di Wilayah Malang</h1>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/Candi Singosari.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '18'";
        $result = mysqli_query($connect, $sql);

        $jml = mysqli_num_rows($result);
        if($jml > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <center><h3><?= $row["namawisata"];?></h3></center>
        <p>
            <?= $row["deskripsi_tempat"];?>
        </p>
        <p>
            <?=  $row["keterangan"];?>
        </p>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
					<p><a class="btn btn-secondary" 
						 href="https://www.google.com/maps/place/Candi+Singosari/@-7.8878852,112.6616675,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd62a52713474b1:0xfd729898cb0cdc0d!8m2!3d-7.8878852!4d112.6638615">Koordinat disini</a></p>
                </div>
              </div>
              <?php
                }
            }
            ?>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/Kampung Budaya Polowijen.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '19'";
        $result = mysqli_query($connect, $sql);

        $jml = mysqli_num_rows($result);
        if($jml > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <center><h3><?= $row["namawisata"];?></h3></center>
        <p>
            <?= $row["deskripsi_tempat"];?>
        </p>
        <p>
            <?=  $row["keterangan"];?>
        </p>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
					<p><a class="btn btn-secondary" 
						 href="https://www.google.com/maps/place/Kampung+Budaya+Polowijen/@-7.9297107,112.6410501,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd629f2b6c595ff:0xd8ab802f6677086e!8m2!3d-7.9297156!4d112.6432424">Koordinat disini</a></p>
                </div>
              </div>
              <?php
                }
            }
            ?>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/Candi Badut.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '20'";
        $result = mysqli_query($connect, $sql);

        $jml = mysqli_num_rows($result);
        if($jml > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <center><h3><?= $row["namawisata"];?></h3></center>
        <p>
            <?= $row["deskripsi_tempat"];?>
        </p>
        <p>
            <?=  $row["keterangan"];?>
        </p>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
					<p><a class="btn btn-secondary" 
						 href="https://www.google.com/maps/place/Candi+Badut/@-8.0418742,112.3372915,8z/data=!4m19!1m13!4m12!1m4!2m2!1d114.3186478!2d-8.4979922!4e1!1m6!1m2!1s0x2e78826723d1a95d:0x95fdf34c20fb4d51!2sjam+operasional+candi+badut+malang!2m2!1d112.5986182!2d-7.9577654!3m4!1s0x2e78826723d1a95d:0x95fdf34c20fb4d51!8m2!3d-7.9577654!4d112.5986182">Koordinat disini</a></p>
                </div>
              </div>
              <?php
                }
            }
            ?>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/Padepokan Seni Asmorobangun.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '21'";
        $result = mysqli_query($connect, $sql);

        $jml = mysqli_num_rows($result);
        if($jml > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <center><h3><?= $row["namawisata"];?></h3></center>
        <p>
            <?= $row["deskripsi_tempat"];?>
        </p>
        <p>
            <?=  $row["keterangan"];?>
        </p>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
					<p><a class="btn btn-secondary" 
						 href="https://www.google.com/maps/place/Sanggar+Seni+Topeng+Malang+%22Asmorobangun%22/@-8.0418742,112.3322454,8z/data=!4m19!1m13!4m12!1m4!2m2!1d114.3186478!2d-8.4979922!4e1!1m6!1m2!1s0x2e789dc463139809:0x8c14d0fa30f6ccd9!2sPadepokan+Seni+Asmorobangun!2m2!1d112.5891382!2d-8.0732667!3m4!1s0x2e789dc463139809:0x8c14d0fa30f6ccd9!8m2!3d-8.0732667!4d112.5891382">Koordinat disini</a></p>
                </div>
              </div>
              <?php
                }
            }
            ?>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/Candi Kidal.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '22'";
        $result = mysqli_query($connect, $sql);

        $jml = mysqli_num_rows($result);
        if($jml > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <center><h3><?= $row["namawisata"];?></h3></center>
        <p>
            <?= $row["deskripsi_tempat"];?>
        </p>
        <p>
            <?=  $row["keterangan"];?>
        </p>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
					<p><a class="btn btn-secondary" 
						 href="https://www.google.com/maps/dir//Candi+Kidal,+Jl.+Raya+Kidal,+Panggung,+Kidal,+Kec.+Tumpang,+Kabupaten+Malang,+Jawa+Timur+65156/@-8.0255455,112.6735122,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2dd6267127c733e5:0x4edb5cefc6b776ea!2m2!1d112.708532!2d-8.025632">Koordinat disini</a></p>
                </div>
              </div>
              <?php
                }
            }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mt-5 mb-3 text-muted text-center">&copy; WonderMalang</p>
  </div>
</footer>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>