<?php 
  
  include'myconnection.php';
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM objekwisata WHERE id_wisata = $id";

  $result = mysqli_query($connect, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA
            </div>
            <div class="card-body">
              <form action="updatedata.php" method="POST">
                
                <div class="form-group">
                  <label>id</label>
                   <input type="text" name="id_wisata" value="<?php echo $row['id_wisata'] ?>" readonly>
                </div>
				
				<div class="form-group">
                  <label>Nama wisata</label>
                   <input type="text" name="namawisata" value="<?php echo $row['namawisata'] ?>" placeholder="masukkan nama wisata" class="form-control">
                </div>		

                <div class="form-group">
                  <label>deskripsi tempat</label>
                   <textarea class="form-control" name="deskripsi_tempat" placeholder="Masukkan deskripsi" rows="4"><?php echo $row['deskripsi_tempat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>keterangan</label>
                  <textarea class="form-control" name="keterangan" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['keterangan'] ?></textarea>
                </div>
				
				<div class="form-group">
                  <label>id jenis</label>
                   <input type="text" name="id_jenis" value="<?php echo $row['id_jenis'] ?>" placeholder="" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>