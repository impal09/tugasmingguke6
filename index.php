<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['username'];
}
?>
<title>Halaman Sukses Login</title>
<div align='center'>
   Anda Berhasil Login! <b></b> <a href="logout.php"><b>Logout</b></a>
</div>
