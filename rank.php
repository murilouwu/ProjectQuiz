<?php
	include('connect.php');
	session_start();
	Proteger();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https:\\cdn.jsdelivr.net\npm\bootstrap@5.1.3\dist\css\bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="estilo/estile.css">
		<link rel="stylesheet" type="text/css" href="estilo/estileap.css">
		<script src="java/fun.js"></script>
		<link rel="shortcut icon" href="img/rank.png">
		<title>Rank</title>
	</head>
	<body>
		<div class="all">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		        <div class="container-fluid d-flex justify-content-around">
			        <div class="d-flex">
			            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			                <li class="nav-item">
			                    <a class="nav-link text-warning linkcss" aria-current="page" href="index.php"><strong>♛</strong></a>
			                </li>
			                <li class="nav-item">
			                	<a class="nav-link text-warning linkcss" aria-current="page" href="pageUser.php"><strong>Perfil</strong></a>
			                </li>
			                <li class="nav-item">
			                	<a class="nav-link text-warning linkcss" aria-current="page" href="jogos.php"><strong>Play</strong></a>
			                </li>
			        	</ul>
			        </div>
		        </div>
		    </nav>
		    <div class="container d-flex flex-column justify-content-center">
		    	<div class="d-flex flex-column justify-content-center text-center align-items-center p-md-3">
		    		<h1 class="fw-normal text-light">Your Rank:</h1>
		    		<div class="collumn container-fluid bg-dark rounded-pill p-md-2 border border-success border-3">
	        			<h2 class="text-light">User: <?php echo$_SESSION['name'];?></h2>
	        			<h6 class="text-light">Position: <?php echo "#".$_SESSION['rank'];?></h6>
	        		</div>
	        		<h1 class="fw-normal text-light p-md-3">World Rank:</h1>
		    	</div>
		    	<div class="d-flex flex-column overflow-auto" style="height: 50vh;">
	        		<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-light border-3 text-center">
	        			<h3 class="text-light">User: Carlos</h3>
	        			<h6 class="text-light">Position: 1</h6>
	        		</div><br>
	        		<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-warning border-3 text-center">
	        			<h3 class="text-light">User: Carlos</h3>
	        			<h6 class="text-light">Position: 1</h6>
	        		</div><br>
	        		<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-warning border-3 text-center">
	        			<h3 class="text-light">User: Carlos</h3>
	        			<h6 class="text-light">Position: 1</h6>
	        		</div><br>
	        		<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-warning border-3 text-center">
	        			<h3 class="text-light">User: Carlos</h3>
	        			<h6 class="text-light">Position: 1</h6>
	        		</div><br>
	        		<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-warning border-3 text-center">
	        			<h3 class="text-light">User: Carlos</h3>
	        			<h6 class="text-light">Position: 1</h6>
	        		</div><br>
	        		<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-warning border-3 text-center">
	        			<h3 class="text-light">User: Carlos</h3>
	        			<h6 class="text-light">Position: 1</h6>
	        		</div><br>
	        		<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-warning border-3 text-center">
	        			<h3 class="text-light">User: Carlos</h3>
	        			<h6 class="text-light">Position: 1</h6>
	        		</div><br>
	        	</div>
		    </div>
		</div>
	</body>
</html>