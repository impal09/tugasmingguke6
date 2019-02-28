<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <title>SP3O Admin - Cari Produk</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css">

</head>

<body>
	 <form action="" method="get">
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
  
<div class="container">
	<ul class="form-section page-section">
		<div class="form-header-group "> 
			<div class="header-text httal htvam"> 
				<h1 align="center" id="header_1" class="form-header" data-component="header"> Pencarian Data Produk </h1>
			</div> 
		</div> 

<br>
 <div class="form">
            Search: <input name="search" placeholder=" Search"/>
                   <input type="submit" value="GO" />
          </form>
          <table border="1">
               </thead>
                   <tr>
                       <th>ID Produk</th>
                       <th>Nama Produk</th>
                       <th>Jumlah Produk</th>
                       <th>Harga</th>
                   </tr>
               </thead>
               <tbody>
<?php 
     //koneksi ke database
        $host = "localhost";
		$user = "root";
		$password = "";
		$dbname = "sp3opart1";
		$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    
            if(isset($_GET['search'])){
                 $param = $_GET['search'];
                 $query = $pdo->prepare("SELECT * FROM produk WHERE nmPr LIKE :param OR idPr LIKE :param ");
                 $query->bindValue(':param', '%'.$param.'%', PDO::PARAM_STR);
                 $query->execute();
					if($query->rowCount() > 0 ){    
                               $no=1;
                               while ($r = $query->fetch()) {
                                    
                                   echo '<tr>
                                            
                                            <td>'.$r['idPr'].'</td>
                                            <td>'.$r['nmPr'].'</td>
                                            <td>'.$r['jmlPr'].'</td>
                                            <td>Rp'.$r['prcPr'].'</td>
                                         </tr>';
                                    
                                   ++$no;
                    
                                }//end while
                                
                            }else{
                                
                                echo "<tr><td colspan=\"4\">Not Found</td></tr>";
                            }
                            
                        }//end if
                    
                    ?>
                   
               </tbody>
           </table>
      </div>
    </body>
</html> 