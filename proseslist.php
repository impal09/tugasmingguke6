<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>SP3O Admin - List Data Produk</title>

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

  <?php
	require_once 'db_config.php';
	try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	   $sql = 'SELECT idPr,

	                  nmPr,

	                  jmlPr,

	                  sp1Pr,

	                  sp2Pr,

	                  prcPr

	             FROM produk

	         ORDER BY idPr';

	   $query = $conn->query($sql);

	   $query->setFetchMode(PDO::FETCH_ASSOC);
	} catch (PDOException $pe) {

	  die("Tidak dapat mengakses database $dbname :" . $pe->getMessage());

	}

	?>

	<!DOCTYPE html>

	<html>

	<head>

	<br><title>List Data Produk</title></br>

	</head>

	<body>

	<h2>List Data Produk</h2><br></br>


	<table class="table table-bordered table-condensed">

	<thead>

	<tr>

	<th>ID Produk</th>

	<th>Nama Produk</th>

	<th>Jumlah Produk</th>

	<th>Spesifikasi 1</th>

	<th>Spesifikasi 2</th>

	<th>Harga</th>

	</tr>

	</thead>

	<tbody>



	<?php while ($row = $query->fetch()): ?>

	<tr>

	<td><?php echo $row['idPr']?></td>

	<td><?php echo $row['nmPr']; ?></td>

	<td><?php echo $row['jmlPr']; ?></td>

	<td><?php echo $row['sp1Pr']; ?></td>

	<td><?php echo $row['sp2Pr']; ?></td>

	<td><?php echo $row['prcPr']; ?></td>
	</tr>
	<?php endwhile; ?>
	</tbody>
	</table>
	</body>
	</html>
