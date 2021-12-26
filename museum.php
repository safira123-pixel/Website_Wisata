<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Museum</title>

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
        <a class="nav-link active" aria-current="page" href="museum.php">Museum</a>
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
        <h1 class="fw-light">Museum di Wilayah Malang</h1>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/museum angkut.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '24'";
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
						 href="https://www.google.com/maps/place/Museum+Angkut/@-7.8786133,112.5197779,15z/data=!4m5!3m4!1s0x0:0x3295038cd23c1d38!8m2!3d-7.8786133!4d112.5197779">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Indonesia Heritage Museum (IHM.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '25'";
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
						 href="https://www.google.com/maps/dir//Museum+D'Topeng+Kingdom+(INDONESIAN+HERITAGE+MUSEUM)+Jatim+Park+1,+65314,+Jatim+Park+I,+Jl.+Kartika+No.2,+Sisir,+Kec.+Batu,+Kota+Batu,+Jawa+Timur+65315/@-7.9758703,112.5020182,11z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e78872c4a5eb5a1:0x6953b3ecdd4126ad!2m2!1d112.5249157!2d-7.8838355">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Museum Kesehatan Jiwa.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '26'";
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
						 href="https://www.google.com/maps/dir/-7.9231666,112.5981485/Museum+Kesehatan+Jiwa,+Krajan+Utara,+Sumber+Porong,+Kabupaten+Malang,+Jawa+Timur/@-7.8897648,112.5949374,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x2dd7d357efc74f87:0x3a89a67255f05cd7!2m2!1d112.7143715!2d-7.8251717">Koordinat disini</a></p>
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