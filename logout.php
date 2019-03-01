<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman logout</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>

<?php
   session_start();
   session_destroy();
?>
<div align="center">
  <h2>Anda telah berhasil logout!</h2>
  Silahkan klik <a href="login.php">disini untuk login kembali</a>
</div>
