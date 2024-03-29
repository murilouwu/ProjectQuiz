<?php
	session_start();
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
		<link rel="shortcut icon" href="img/home.png">
		<title>Main</title>
	</head>
	<body style="overflow: hidden;">
		<div class="all">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		        <div class="container-fluid d-flex justify-content-around">
			        <div class="d-flex">
			            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			                <li class="nav-item">
			                    <a class="nav-link text-warning linkcss" aria-current="page" href="#"><strong>♛</strong></a>
			                </li>
			                <li class="nav-item">
			                	<a class="nav-link text-warning linkcss" aria-current="page" onclick="ocultar('cadastro','login')"><strong>✚</strong></a>
			                </li>
			                <li class="nav-item">
			                	<a class="nav-link text-warning linkcss" aria-current="page" onclick="ocultar('login','cadastro')"><strong>➤</strong></a>
			                </li>
			        	</ul>
			        </div>
		        </div>
		    </nav>
		    <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-dark bg-opacity-50">
	            <div class="col-md-5 mx-auto my-2">
	                <img src="img/bigchad.png" class="imglink">
	                <h1 class="fw-normal text-light">QUIZ PROJECT</h1>
	                <h2 class="text-light">-Sigma pair-</h2>
	                <p class="lead fw-normal text-light">
	                    Start Here
	                </p>
	                <button type="button" class="btn btn-dark text-light" onclick="ocultar('cadastro','login')">Register</button>
	            </div>
	        </div>
	        <div class="container-fluid d-flex justify-content-center margin">
		        <form id="cadastro" class="cadastro" method="post" style="margin-top: -1vh;">
		        	<div class="container-fluid d-flex flex-column justify-content-center">
		        		<label class="form-label text-light fw-bolder">Register</label>

		        		<label class="form-label text-light fw-bolder">Name:</label>
		        			<input type="text" name="nome" class="form-control bg-dark text-light" placeholder="Don't use the character (&)">
		        		<label class="form-label text-light fw-bolder">Email:</label>
		        			<input type="email" name="email" class="form-control bg-dark text-light">
		        		<label class="form-label text-light fw-bolder">Password:</label>
		        			<input type="password" name="senha" class="form-control bg-dark text-light" required>
		        		<input type="submit" class="form-control bg-dark text-light" name="enviar1" value="TO SEND">
		        	</div>
		        </form>
		        <form id="login" class="cadastro" method="post" style="margin-top: -1vh;">
		        	<div class="container-fluid d-flex flex-column justify-content-center">
		        		<label class="form-label text-light fw-bolder">Log in</label>

		        		<label class="form-label text-light fw-bolder">Nome:</label>
							<input type="text" name="nomelog" class="form-control bg-dark text-light">
		        		<label class="form-label text-light fw-bolder">Password:</label>
		        			<input type="password" name="senhalog" class="form-control bg-dark text-light" require>
		        		<input type="submit" class="form-control bg-dark text-light" name="enviar2" value="TO SEND">
		        	</div>
		        </form>
	        </div>
	    </div>
	</body>
</html>
<?php
	include('connect.php');
	if(isset($_POST['enviar1'])){
		$sql0 = 'SELECT * FROM user WHERE nome = "'.$_POST['nome'].'"';
		$res = $con->query($sql0);
		if($res->num_rows < 1){
			$sql2 = 'SELECT MAX(possicao) AS poss FROM user';
		    $res2 = $con->query($sql2);
		    $list = $res2->fetch_object();
			$pos = fun($list->poss) +1;
			$sql= 'INSERT INTO user (nome,email,senha,foto,ponto,possicao) VALUES ("'.$_POST['nome'].'","'.$_POST['email']. '","'.$_POST['senha'].'","img/face.png","0","'.$pos.'")';
			$resultado = $con->query($sql);
			if(!$resultado){
				msg("erro ao cadastrar.");
			}
		}else{
			msg("User já existe");
		}
	}
	if(isset($_POST['enviar2'])){
		$sql = 'SELECT * FROM user WHERE nome = "'.$_POST['nomelog'].'" AND senha ="'.$_POST['senhalog'].'"';
		$res = $con->query($sql);
		if($res->num_rows > 0){
			$user = $res->fetch_object();
			$_SESSION['cd'] = $user->cd;
			$_SESSION['name'] = $user->nome;
			$_SESSION['senha'] = $user->senha;
			$_SESSION['email'] = $user->email;
			$_SESSION['img'] = $user->foto;
			$_SESSION['pontos'] = $user->ponto;
			$_SESSION['rank'] = $user->possicao; 
			vai('pageUser.php');
		}else{
			msg("USER OU SENHA INVALIDO");
		}
	}
?>