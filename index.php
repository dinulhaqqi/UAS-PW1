<?php
	session_start();
	include"koneksi.php";
	if (!isset($_SESSION['username'])){
		header ("location:login.php");
	}
	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	}
?>

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
					  <a class="dropdown-item" href="admin.php">Admin List</a>
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
			<h1 class="hometitle"><b>- Select Your Reference! -</b></h1>
			<div class="card-deck ml-5 mr-5 mt-5">
			<div class="card" style="width: 18rem;">
			  <img src="4.jpg" class="card-img-top" alt="..." style="height:300px">
			  <div class="card-body">
				<h5 class="card-title">PC Games</h5>
				<p class="card-text">Click this card to get some reference of PC games!</p>
				<a href="#" class="btn btn-primary">Go now!</a>
			  </div>
			</div>
			<div class="card" style="width: 18rem;">
			  <img src="5.jpg" class="card-img-top" alt="..." style="height:300px">
			  <div class="card-body">
				<h5 class="card-title">Android Games</h5>
				<p class="card-text">Click this card to get some reference of Android games!</p>
				<a href="#" class="btn btn-primary">Go now!</a>
			  </div>
			</div>
			<div class="card" style="width: 18rem;">
			  <img src="6.jpg" class="card-img-top" alt="..." style="height:300px">
			  <div class="card-body">
				<h5 class="card-title">Steam Games</h5>
				<p class="card-text">Click this card to get some reference of Steam games!</p>
				<a href="#" class="btn btn-primary">Go now!</a>
			  </div>
			</div>			
			</div>
			<br>
			<br>
			<br>
			<footer class="bg-dark">
			<p class="copyright"><b>©2021 GamesRecom</b></p>
			</div>
			
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		</body>
<html>