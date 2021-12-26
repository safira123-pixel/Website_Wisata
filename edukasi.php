<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Edukasi</title>

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
        <a class="nav-link active" aria-current="page" href="edukasi.php">Edukasi</a>
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
        <h1 class="fw-light">Wisata Edukasi di Wilayah Malang</h1>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/Eco Green Park.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '28'";
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
						 href="https://www.google.com/maps/dir/-7.9231666,112.5981485/Eco+Green+Park,+Jalan+Oro-Oro+Ombo,+Sisir,+Kota+Batu,+Jawa+Timur/@-7.9052692,112.52809,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x2e7881617ff5e4f7:0x63c0ef9654873861!2m2!1d112.5276998!2d-7.8886606">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Batu Secret Zoo A.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '29'";
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
						 href="https://www.google.com/maps/place/Jawa+Timur+Park+2/@-7.9055554,112.5290489,13z/data=!4m18!1m12!4m11!1m3!2m2!1d112.5981485!2d-7.9231666!1m6!1m2!1s0x2e7880d6ffffffff:0xf36560f87fd4fd77!2sJawa+Timur+Park+2,+Jl.+Oro-Oro+Ombo+No.9,+Temas,+Kec.+Batu,+Kota+Batu,+Jawa+Timur+65315!2m2!1d112.5296176!2d-7.8889575!3m4!1s0x2e7880d6ffffffff:0xf36560f87fd4fd77!8m2!3d-7.8889575!4d112.5296176

				">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Museum Satwa.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '30'";
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
						 href="https://www.google.com/maps/dir//Museum+Satwa+Jawa+Timur+Park+2,+Jl.+Oro-Oro+Ombo+No.9,+Temas,+Kec.+Batu,+Kota+Batu,+Jawa+Timur+65314/@-7.8888126,112.5273718,17z/data=!4m15!1m6!3m5!1s0x2e78812bb84d2d63:0xb594f3837d9ade3f!2sMuseum+Satwa+Jawa+Timur+Park+2!8m2!3d-7.8888179!4d112.5295605!4m7!1m0!1m5!1m1!1s0x2e78812bb84d2d63:0xb594f3837d9ade3f!2m2!1d112.5295605!2d-7.8888179">Koordinat disini</a></p>
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