<?php

include('myconnection.php');

$id = $_GET['id'];

$query = "DELETE FROM objekwisata WHERE id_wisata = '$id'";

if(mysqli_query($connect, $query)) {
    header("location: CRUDwisata.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>