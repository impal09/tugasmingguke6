<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title>SP3O Admin - Input Produk</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>
<form method="post">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">PT.OTOMOTIF INDONESIA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="indexadmin.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<br>
<br>

<div class="container">
  <ul class="form-section page-section">
    
	<div class="form-header-group "> 
    <div class="header-text httal htvam"> 
      <h1 id="header_1" class="form-header" data-component="header"> Form Input Produk </h1>
    </div> 
	</div> 

<br>
  
<label class="form-label form-label-top form-label-auto" id="label_4" for="first_4"> ID Produk </label> 
	<div id="cid_3" class="form-input-wide"> 
		<input type="text" name="idPr" maxlength="20" size="20">
	</div> 

<br>

<label class="form-label form-label-top form-label-auto" id="label_4" for="first_4"> Nama Produk </label> 
	<div id="cid_4" class="form-input-wide"> 
		<input type="text" name="namaPr" maxlength="20" size="20">
	</div> 

<br>

<label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Jumlah Produk </label> 
  <div id="cid_5" class="form-input-wide"> 
    <input type="text" name="jumlahPr" maxlength="20" size="20">
  </div> 
 
<br>

<label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> Spesifikasi 1 </label> 
  <div id="cid_6" class="form-input-wide"> 
    <textarea name="Spek1" rows="5" cols="40"> </textarea>
  </div> 
  
<br>

<label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Spesifikasi 2</label> 
	<div id="cid_7" class="form-input-wide"> 
        <textarea name="Spek2" rows="20" cols="50"> </textarea> 
    </div> 

<br>	

<label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Harga </label> 
    <div id="cid_8" class="form-input-wide"> 
		<input type="integer" name="hargaPr" maxlength="20" size="20">
	<div>

<br>
  
<div id="cid_2" class="form-input-wide"> 
    <div style="margin-left:15px" class="form-buttons-wrapper"> 
    <input type="submit" value="Submit" name="submit">
  </div> 
</div> 
 
</ul>
    <?php
   
	///membuat koneksi ke database
	if(isset($_POST["submit"])){
	$hostname="localhost"; ///nama server
	$username="root"; ///nama username mysql
	$password="";

	try {
	$dbh = new PDO("mysql:HOST=$hostname;dbname=sp3opart1",$username,$password);///koneksi ke database
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO produk (idPr,nmPr,jmlPr,sp1Pr,sp2Pr,prcPr) VALUES ('".$_POST["idPr"]."','".$_POST["namaPr"]."','".$_POST["jumlahPr"]."','".$_POST["Spek1"]."','".$_POST["Spek2"]."','".$_POST["hargaPr"]."')";
	$dbh->exec($sql);
	///validasi data dari form
	
	
	if($dbh->query($sql))
	{
		echo "New Record Inserted Successfully";	
	}
	else{
		echo "Data not Inserted Successfully";
	}

	}
	catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	}
	$dbh = null;
	}
	?>
</body>
</html>