<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Air Terjun</title>

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
        <a class="nav-link active" aria-current="page" href="airterjun.php">Air Terjun</a>
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
        <h1 class="fw-light">Air Terjun di Wilayah Malang</h1>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <center>
          <img class="rounded" src="img/Coban Sewu.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '1'";
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
						 href="https://www.google.com/maps/place/Grojogan+Coban+Sewu/@-7.8664128,112.4233498,15z/data=!4m5!
						 3m4!1s0x0:0x4fdbae6fe33510b0!8m2!3d-7.8664128!4d112.4233498">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Air Terjun Coban Jahe.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '2'";
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
						 href="https://www.google.co.id/maps/place/Coban+Jahe/@-7.9694641,112.8008084,17z/data=!3m1!4b1!4m5!
						 3m4!1s0x2dd62fddb5377e7b:0xe635dfe89acb6f83!8m2!3d-7.9694694!4d112.8029971">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Air Terjun supit urang.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '3'";
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
						 href="https://www.google.com.sg/maps/place/Coban+Supit+Urang/@-7.7910124,112.4603085,20z/data=!4m5!3m4!1s0x2e787c80abdc5cc5:
						 0xe8ec7bbaa05c885b!8m2!3d-7.7910044!4d112.4603522">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Air Terjun Coban rondo.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '4'";
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
						 href="https://www.google.com/maps/place/Air+Terjun+Coban+Rondo+Pujon/@-7.884994,112.477319,15z/data=!4m5!3m4!1s0x0:
						 0x9f46ac987d3e2274!8m2!3d-7.884994!4d112.477319">Koordinat disini</a></p>
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
          <img class="rounded" src="img/Air Terjun Coban talun.jpg" width="200" height="200" alt="gambar circle">
          </center>
          <?php
        include("myconnection.php");
        $sql = "SELECT * FROM objekwisata WHERE id_wisata = '5'";
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
						 href="https://www.google.com/maps/place/Coban+Talun/@-7.8050557,112.5148643,17z/data=!3m1!4b1!4m5!3m4!1s0x2e787c2dca970625:0x9f9b3c052b1f9902!8m2!
						 3d-7.8050557!4d112.5170583">Koordinat disini</a></p>
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