<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 Javascript</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php

    // Deklarasi variabel PHP
    $nama = "Yohan Dwi Bachtiar";
    $alamat = "Irman Jaya-Manokwari, Papua Barat.";
    $telepon = "082 345 678 980";
    $email = "yohanbachtiar2001@gmail.com";
	$linke = "https://www.linkedin.com/in/yohan-dwi-bachtiar-309844254"
    ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light static-top navbar-dark bg-dark">
				 
				
				</button> <a class="navbar-brand" href="index.php">Profil</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="tentang.php">Tentang Saya <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="contac.php">Hubungi Saya</a>
						</li>
					</ul>

				</div>
			</nav>
            <br>
            <br>
            <br>
			<h3 class="text-left">
				Hallo, Saya <?php echo $nama; ?>
			</h3> <br><img alt="Bootstrap Image Preview" src="asset/akuu.jpg" class="rounded-circle" />
			<br>
            <br>
            <br>
            <p>
				Agama islam, Daerah tempat tinggal saya <?php echo $alamat; ?>, di Universitas Papua saya belajar menempuh dunia pendidikan.
			</p>
			<div>
				Tentang saya,
			</div>
			
		</div>
	</div>
    <br>
    <br>
 
	<div class="row">
		<div class="col-md-4">
			<h2>
				Informatic Engginering
			</h2>
			<p>
				<img alt="Bootstrap Image Preview" src="asset/it.jpg" />
			</p>
			<p>
				<a class="btn" href="https://www.unipa.ac.id/program-studi/teknik-informatika">View details »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Universitas Papua
				
			</h2>
			<p>
				<img alt="Bootstrap Image Preview" src="asset/unipa.jpg" />
			</p>
			<p>
				<a class="btn" href="https://www.unipa.ac.id/">View details »</a>
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Pengalaman Baru
			</h2>
			<p>
				<img alt="Bootstrap Image Preview" src="asset/prog.jpeg" />
			</p>
			<p>
				<a class="btn" href="https://www.htp.co.id/">View details »</a>
			</p>
		</div>
	</div>
</div>

            <div>
				Pengalaman Bekerja
			</div>
			
		</div>
	</div>
    <br>
    <br>
 
	<div class="row">
		<div class="col-md-4">
			<h2>
				Anies Dental Care
			</h2>
			<p>
				<img alt="Bootstrap Image Preview" src="asset/klinik.png" />
			</p>
			<p>
				Sebagai admin klinik 
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Bengkel Mobil Los Doll
				
			</h2>
			<p>
				<img alt="Bootstrap Image Preview" src="asset/mekanik.jpg" />
			</p>
			<p>
				Sebagai mekanik mobil 
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Galaxy Computer
			</h2>
			<p>
				<img alt="Bootstrap Image Preview" src="asset/galaxy.jpg" />
			</p>
			<p>
				Sebagai admin toko komputer
			</p>
		</div>
	</div>
</div>

</body>
</html>