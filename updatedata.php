<?php

include('myconnection.php');

$id_wisata    				= $_POST['id_wisata'];
$namawisata         = $_POST['namawisata'];
$deskripsi_tempat 	= $_POST['deskripsi_tempat'];
$keterangan       	= $_POST['keterangan'];
$id_jenis			= $_POST['id_jenis'];

$query = "UPDATE objekwisata SET namawisata = '$namawisata', deskripsi_tempat = '$deskripsi_tempat', keterangan = '$keterangan', id_jenis = '$id_jenis' WHERE id_wisata = '$id_wisata'";

if(mysqli_query($connect, $query)) {
    header("location: CRUDwisata.php");
} else {
    echo "Data Gagal Diupate!";
} 


?>