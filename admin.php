<!DOCTYPE HTML>
<html>
	<head>
		<title>GamesRecom.com - Home</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="style_web.css">
	</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="Tugas2(1).php"><b>GamesRecom</b></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				  </li>
				  <li class="nav-item dropdown">
				  <li class="nav-item">
					<a class="nav-link" href="#">PC Games</a>
				  </li>
				  <li class="nav-item dropdown">
				  <li class="nav-item">
					<a class="nav-link" href="#">Android Games</a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Others
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#">Admin List</a>
					  <a class="dropdown-item" href="aksi_logout.php">Logout</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="home.php">Our Other Website</a>
					</div>
				</ul>
				<form class="form-inline my-2 my-lg-0">
				  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			  </div>
			</nav>
			<br>
			<br>
			
			
			<table class="table table-striped" style="text-align : center">
			<thead class="table-dark">
				<th>Index</th>
				<th>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Option</th>
			</thead>
				
			<!-- menampilkan data admin -->
			<?php
				include_once 'koneksi.php';
				$no=1;
				$data=mysqli_query($koneksi, "select * from admin");
				
				while ($d=mysqli_fetch_array($data)){
			?>
			
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['ID']; ?></td>
					<td><?php echo $d['Name']; ?></td>
					<td><?php echo $d['Gender']; ?></td>
					<td>
						<a href="">Edit</a>
						<a href="">Delete</a>
				</tr>
				
			<?php	
				}
			?>
			
			<!-- menampilkan data admin -->
			
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		</body>
<html>