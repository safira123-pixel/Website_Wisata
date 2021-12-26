<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Data Wisata</title>
	 <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
	 
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
    <link href="assets/dist/css/carousel.css" rel="stylesheet">
  </head>

  <body>
  
  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand">Data Wisata WonderMalang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link"  href="adminHome.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="CRUDwisata.php">tabel Data</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-20">
          <div class="card">
            <div class="card-header">
              DATA WISATA
            </div>
            <div class="card-body">
              <a href="tambahdata.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">Nama Wisata</th>
                    <th scope="col">Deskripsi Tempat</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Id Jenis</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
		include 'myconnection.php';

		$query = "SELECT * FROM objekwisata";
		$result = mysqli_query($connect, $query);

		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_array($result)) {
				
		?>

                  <tr>
                      <td><?php echo $row['namawisata'] ?></td>
                      <td><?php echo $row['deskripsi_tempat'] ?></td>
                      <td><?php echo $row['keterangan'] ?></td>
					  <td><?php echo $row['id_jenis'] ?></td>
                      <td class="text-center">
                        <a href="editdata.php?id=<?php echo $row['id_wisata'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapusdata.php?id=<?php echo $row['id_wisata'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

               <?php 
				}
			}
		else{
			echo "0 result";
		}
		?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>