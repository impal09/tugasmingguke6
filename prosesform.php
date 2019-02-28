<!DOCTYPE HTML>
<html>
<head>
	<title>proses data dari form</title>
</head>
<body>
	<h1>Proses Simpan Buku Tamu</h1>   
    <?php

    
	///membuat koneksi ke database
	$server="localhost"; ///nama server
	$username="root"; ///nama username mysql
	$password=""; ///password, kosongkan jika tidak ada
	$database="sp3opart1"; ///nama database yang dipilih

	mysql_connect($server, $username, $password) or die ("Koneksinya Gagal"); ///koneksi ke database
	mysql_select_db($database) or die ("Databasenya Gak Ada"); ///memilih database, dan menampilkan pesan jika gagal

	///mengambil data dari form
    $idePr=$_POST["idePr"];
	$namaPr=$_POST["namaPr"];
	$jumlahPr=$_POST["jumlahPr"];
	$Spek1=$_POST["Spek1"];
    $Spek2=$_POST["Spek2"];
    $hargaPr=$_POST["hargaPr"];
    
   // print(is_numeric($jumlahPr));
    function isInteger($input){
    return(ctype_digit(strval($input)));
    }
    
  //  var_dump(isInteger($jumlahPr));
    
    
   if(isInteger($jumlahPr)){
      // print(".is_int($jumlahPr).");
   
	///input ke tabel pengunjung
	$input=mysql_query("INSERT INTO produk (idPr,nmPr,jmlPr,sp1Pr,sp2Pr,prcPr) VALUES ('$idePr','$namaPr', '$jumlahPr', '$Spek1', '$Spek2', '$hargaPr')");

	///cek sudah terinput atau belum
	if($input) ///jika sukses
	{
		echo "Buku tamu berhasil disimpan";
	}
		else ///jika gagal
	{
		echo "Buku tamu gagal disimpan";
	}
        echo "<br>";
   

    echo"Berikut Produk yang Berhasil disimpan";
     echo"<br>";
  //   print("Id Produk:" .$_POST["idPr"]."<br>"); 
     print("Nama Produk:" .$_POST["namaPr"]."<br>");
     print("Jumlah Produk:" .$_POST["jumlahPr"]."<br>");
     print("Spesifikasi singkat:" .$_POST["Spek1"]."<br>");
     print("Spesifikasi Lengkap:" .$_POST["Spek2"]."<br>");
     print("Harga Produk:" .$_POST["hargaPr"]."<br>");
   }else{   
    echo "   jumlah harus integer";   echo"<br>";
    echo "Buku tamu gagal disimpan";  echo"<br>";
}
	?>
  <a href="insertproduk.html">
</body>
</html>