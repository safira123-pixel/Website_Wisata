<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Login Multi User</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
</head>

<body>
  <form class="form-signin" method="GET" action="cek_registrasi.php">
    <div class="text-center mb-4">
      <img class="mb-4" src="img/logo.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">Form Sign Up</h1>
      <p>Masukkan Username dan Password anda dengan Benar!</p>
    </div>
<table>
			<div class="form-label-group">
      <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
      <label>Username</label>
    </div>

    <div class="form-label-group">
      <input type="password" class="form-control" name="password" placeholder="Password">
      <label>Password</label>
    </div>
			  <p> Sudah punya akun?
                  <a href="index.php">Login di sini</a>
                </p>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">Sign up</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; WonderMalang</p>
  </form>
</body>
</html>