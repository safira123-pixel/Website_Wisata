<?php
    include "myconnection.php";
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT * FROM user WHERE username= '$username' && password = '$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

//uji jika username terdaftar
if ($username='username') {
    //jika username terdaftar
    //cek password sesuai atau tidak
    if ($password = 'password') {
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];

        //uji level user
        if($row['id'] == "1"){
            header("Location:adminHome.html");
        }else if($row['id'] > "1"){
            header("Location:guestHome.html");
        }else{
            header("Location:index.php?error=failed");
        }
    } else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');document.location='index.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');document.location='index.php'</script>";
}
?>