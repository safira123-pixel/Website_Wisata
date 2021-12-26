<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Kuliner</title>

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
        <a class="nav-link active" aria-current="page" href="kuliner.php">Kuliner</a>
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
        <h1 class="fw-light">Wisata Kuliner di Wilayah Malang</h1>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/Bakso President.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '31'";
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
						 href="https://www.google.com/maps/place/Bakso+President+Malang/@-8.0416525,112.9174578,9z/data=!4m19!1m13!4m12!1m4!2m2!1d114.3189728!2d-8.4979905!4e1!1m6!1m2!1s0x2dd628335d4e5bfd:0x857ffeffd55450b0!2sjam+operasional+bakso+president+malang!2m2!1d112.6370774!2d-7.9625217!3m4!1s0x2dd628335d4e5bfd:0x857ffeffd55450b0!8m2!3d-7.9625217!4d112.6370774">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Pos Ketan Legenda.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '32'";
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
						 href="https://www.google.com/maps/place/Pos+Ketan+Legenda+1967+Suhat/@-8.0417391,112.3492164,8z/data=!4m19!1m13!4m12!1m4!2m2!1d114.3190425!2d-8.4965582!4e1!1m6!1m2!1s0x2dd629dfdc6eb37d:0xfd9e43b8f060d3a0!2sjam+operasional+pos+ketan+legenda+malang!2m2!1d112.6215901!2d-7.9420069!3m4!1s0x2dd629dfdc6eb37d:0xfd9e43b8f060d3a0!8m2!3d-7.9420069!4d112.6215901">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Pecel Kawi.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '33'";
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
						 href="https://www.google.com/maps/place/Rumah+Makan+Pecel+Kawi+Hj+Musilah+Asli+1975/@-8.0418724,112.3481292,8z/data=!4m19!1m13!4m12!1m4!2m2!1d114.3189728!2d-8.4979905!4e1!1m6!1m2!1s0x2dd62827639c20fd:0xc5b6351c172eca87!2sjam+operasional+pecel+kawi+malang!2m2!1d112.6200422!2d-7.9756998!3m4!1s0x2dd62827639c20fd:0xc5b6351c172eca87!8m2!3d-7.9756998!4d112.6200422">Koordinat disini</a></p>
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