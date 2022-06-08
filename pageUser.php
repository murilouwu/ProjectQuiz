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
		<link rel="shortcut icon" href="img/face.png">
		<title><?php
			echo $_SESSION['name'];
		?></title>
	</head>
	<body style="overflow: hidden;">
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

						<img src="<?php echo$_SESSION['img'];?>" class="per media-object img-responsive border border-secondary border-3 rounded-pill" onclick="ocultar('imgtr','2')">
					</div>
			        <div class="d-flex">
			            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			                <li class="nav-item">
			                    <a class="nav-link text-warning linkcss" aria-current="page" href="index.php"><strong>♛</strong></a>
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
									<li><a class="dropdown-item text-warning d-flex flex-column align-items-center linkcss" onclick="excluir()"><strong>Excuir Conta</strong></a></li>
			                    </ul>
			                </li>
			        	</ul>
			        </div>
		        </div>
		    </nav>
		    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-dark bg-opacity-50">
	            <div class="col-md-5 lg-5 mx-auto my-2">
	                <img src="img/bigchad.png" class="imglink">
	                <p class="lead fw-normal text-light">
	                    Welcome <?php echo$_SESSION['name'];?>
	                </p>
	            </div>
	            <div class="col-md-5 lg-5 mx-auto my-2">
	            	<h1 class="fw-normal text-light"><strong>-Ranking-</strong></h1>
	                <p class="lead fw-normal text-light">
	                	Position:<br><?php echo "# ".$_SESSION['rank'];?><br>
	                	Punctuation:<br><?php echo $_SESSION['pontos']." Spots";?>
	                </p>
	            </div>
	        </div>
	        <div class="container-fluid d-flex justify-content-center margin">
		        <form id="senha" class="formimgA" method="post">
		        	<div class="container-fluid d-flex flex-column justify-content-center">
		        		<button onclick="ocultar('senha','2')" class="buton2 btn btn-warning text-light"><strong>X</strong></button>
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
	<script>
		function excluir(){
			window.location = "ex.php"
		} 
	</script>
</html>
<?php
	if(isset($_POST['env001'])){
		$cd = $_SESSION['cd'];
		$img = $_POST['link'];
		$imgtm = mb_strlen($img);
		$imgex = $img[($imgtm - 3)].$img[($imgtm - 2)].$img[($imgtm - 1)];
		if($imgex=="jpg" || $imgex=="png"){
			$sql = 'UPDATE user SET foto ="'.$img.'" WHERE cd ="'.$cd.'"';
			$res = $con->query($sql);

			$sql2 = 'SELECT * FROM user WHERE nome = "'.$_SESSION['name'].'" AND senha ="'.$_SESSION['senha'].'"';
			$res2 = $con->query($sql2);
			$user = $res2->fetch_object();
			$_SESSION['img'] = $user->foto;
			vai("pageUser.php");
		}else{
			msg("não aceitamos .".$imgex." nesse site");
		}
	}
	if(isset($_POST['enviar'])){
		$cd = $_SESSION['cd'];
		$name = $_POST['nome'];
		$senha = $_POST['senha'];
		if(!($_POST['nome']==="")){
			$sql = 'UPDATE user SET nome ="'.$name.'" WHERE cd ="'.$cd.'"';
			$res = $con->query($sql);

			$sql2 = 'SELECT * FROM user WHERE cd ="'.$cd.'"';
			$res2 = $con->query($sql2);

			if($res2->num_rows > 0){
				$user = $res2->fetch_object();
				$_SESSION['name'] = $user->nome; 
			}else{
				msg("função negada");
			}
		}else{
			$sql = 'UPDATE user SET nome ="'.$_SESSION['name'].'" WHERE cd ="'.$cd.'"';
			$res = $con->query($sql);

			$sql2 = 'SELECT * FROM user WHERE cd ="'.$cd.'"';
			$res2 = $con->query($sql2);

			if($res2->num_rows > 0){
				$user = $res2->fetch_object();
				$_SESSION['name'] = $user->nome; 
			}else{
				msg("função negada");
			}
		};
		$sql = 'UPDATE user SET senha ="'.$senha.'" WHERE cd ="'.$cd.'"';
		$res = $con->query($sql);

		$sql2 = 'SELECT * FROM user WHERE cd ="'.$cd.'"';
		$res2 = $con->query($sql2);

		if($res2->num_rows > 0){
			$user = $res2->fetch_object();
			$_SESSION['senha'] = $user->senha; 
		}else{
			msg("função negada");
		}
	}
?>