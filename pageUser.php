<?php
	session_start();
	$_SESSION["name"] = "Paulo";
	$_SESSION["img"] = "img/face.png";
	$_SESSION["rank"] = "800";
	$_SESSION["pontos"] = "0";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https:\\cdn.jsdelivr.net\npm\bootstrap@5.1.3\dist\css\bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="estilo/estile.css">
		<script src="java/fun.js"></script>
		<link rel="shortcut icon" href="img/face.png">
		<title><?php
			echo $_SESSION['name'];
		?></title>
	</head>
	<body>
		<div class="all">
			<div id="2" style="display: none;"></div>
			<form id="imgtr" class="formimg" method="post">
		        <div class="container-fluid d-flex flex-column justify-content-center">
		        	<button onclick="ocultar('imgtr','2')" class="buton btn btn-warning text-light"><strong>X</strong></button>
		        	<label class="form-label text-light fw-bolder">Change Profile Picture:</label>
		        		<input type="url" name="link" class="form-control bg-dark text-light" minlength="5" placeholder="paste the image link here" required>
		        	<input type="submit" class="form-control bg-dark text-light" name="env001" value="TO SEND">
		        </div>
		    </form>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		        <div class="container-fluid d-flex justify-content-around">
		        	<div class="d-flex justify-content-around align-items-center">

						<img <?php $img = $_SESSION['img']; echo ('src="'.$img.'"');?> class="per media-object img-responsive border border-secondary border-3 rounded-pill" onclick="ocultar('imgtr','2')">
					</div>
			        <div class="d-flex">
			            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			                <li class="nav-item">
			                    <a class="nav-link text-warning linkcss" aria-current="page" href="index.html"><strong>♛</strong></a>
			                </li>
			                <li class="nav-item">
			                	<a class="nav-link text-warning linkcss" aria-current="page" href="rank.php"><strong>Ranking</strong></a>
			                </li>
			                <li class="nav-item">
			                	<a class="nav-link text-warning linkcss" aria-current="page" href="jogos.php"><strong>Play</strong></a>
			                </li>
			                <li class="nav-item dropdown linkcss">
			                    <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

			                        <strong>Account</strong>
			                    </a>
			                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
			                        <li><a class="dropdown-item text-warning d-flex flex-column align-items-center linkcss" onclick="ocultar('senha','2')"><strong>Change Password</strong></a></li>
			                        <li><a class="dropdown-item text-warning d-flex flex-column align-items-center linkcss" href="index.html"><strong>Delete Account</strong></a></li>
			                    </ul>
			                </li>
			        	</ul>
			        </div>
		        </div>
		    </nav>
		    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-dark bg-opacity-50">
	            <div class="col-md-5 lg-5 mx-auto my-2">
	                <img src="img/logo.png" class="imglink">
	                <p class="lead fw-normal text-light">
	                    Welcome <?php echo$_SESSION['name'];?>
	                </p>
	            </div>
	            <div class="col-md-5 lg-5 mx-auto my-2">
	            	<h1 class="fw-normal text-light"><strong>-Ranking-</strong></h1>
	                <p class="lead fw-normal text-light">
	                	Position:<br><?php echo "#".$_SESSION['rank'];?>;<br>
	                	Punctuation:<br><?php echo $_SESSION['pontos']." Spots";?>;
	                </p>
	            </div>
	        </div>
	        <div class="container-fluid d-flex justify-content-center margin">
		        <form id="senha" class="formimgA" method="post">
		        	<div class="container-fluid d-flex flex-column justify-content-center">
		        		<button onclick="ocultar('senha','2')" class="buton btn btn-warning text-light"><strong>X</strong></button>
		        		<label class="form-label text-light fw-bolder">Change</label>

		        		<label class="form-label text-light fw-bolder">Name:</label>
		        			<input type="text" name="nome" class="form-control bg-dark text-light" placeholder="optional">
		        		<label class="form-label text-light fw-bolder">Password:</label>
		        			<input type="text" name="senha" class="form-control bg-dark text-light">
		        		<input type="submit" class="form-control bg-dark text-light" name="enviar" value="TO SEND">
		        	</div>
		        </form>
	        </div>
		</div>
	</body>
</html>