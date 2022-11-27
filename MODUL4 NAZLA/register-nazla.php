<?php
require 'config/register2-nazla.php';
  if(isset($_POST["submit"])){
    if(register($_POST) > 0){
      header("Location:login-nazla.php");
      exit;
    }
  };

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- My Css -->
  <link rel="stylesheet" href="../styles/index.css">

  <title>Home</title>
</head>

<body>
  <main>
    <div class="row align-items-center">
      <div class="col" style="height:100vh;">
        <img src="pic/fotoregisterlogin.JPG" alt="" height="100%" width="100%">
      </div>
      <div class="col">
        <div class="container">
          <h2 class="fw-bold">Register</h2>

          <form action="" method="post">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            
            <div class="mb-3">
              <label for="nomor_handphone" class="form-label">No. HP</label>
              <input type="number" class="form-control" id="nomor_handphone" name="nomor_handphone">
            </div>
            
            <div class="mb-3">
              <label for="password" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <div class="mb-3">
              <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
              <input type="password" class="form-control" id="password2" name="password2">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Daftar" name="submit">
            </form>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
              

