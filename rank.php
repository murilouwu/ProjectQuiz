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
		<div class="all" style="overflow: hidden;">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		        <div class="container-fluid d-flex justify-content-around">
		        	<div class="d-flex justify-content-around align-items-center">

						<img src="<?php echo$_SESSION['img'];?>" class="per media-object img-responsive border border-secondary border-3 rounded-pill">
					</div>
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
		    		<div class="collumn container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-warning border-3 text-center">
		    			<img src="<?php echo$_SESSION['img'];?>" class="imgrank">
	        			<h1 class="text-light">User: <?php echo$_SESSION['name'];?></h1>
	        			<h1 class="text-light">Rank: <?php echo "#".$_SESSION['rank'];?></h1>
	        		</div>
	        		<h1 class="fw-normal text-light p-md-3">World Rank:</h1>
		    	</div>
		    	<div class="d-flex flex-column overflow-auto" style="height: 50vh;">
	        		<?php
	        			$sql ='SELECT * FROM user WHERE possicao=1';
	        			$res = $con->query($sql);
		    			$user = $res->fetch_object();
		    			$nome = $user->nome;
		    			$foto = $user->foto;
		    			$poss = $user->possicao;
		    			$pont = $user->ponto;
	        			$texto = '<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-primary border-3 text-center">
	        				<img src="'.$foto.'" class="imgrank">
		        			<h3 class="text-light">User: '.$nome.'</h3>
		        			<h3 class="text-light">Rank: #'.$poss.'</h3>
		        			<h3 class="text-light">Punctuation: '.$pont.'</h3>
		        		</div>';
		        		echo($texto);
	        		?><br>
	        		<?php
	        			$sql0 ='SELECT * FROM user';
	        			$res0 = $con->query($sql0);
	        			$row = $res0->num_rows + 1;
	        			$i = 2;
	        			while($i<$row){ 
	        				$sql ='SELECT * FROM user WHERE possicao='.$i.'';
		        			$res = $con->query($sql);
			    			$user = $res->fetch_object();
			    			$nome = $user->nome;
			    			$foto = $user->foto;
			    			$poss = $user->possicao;
			    			$pont = $user->ponto;
			    			$bor = cor($nome);
		        			$texto = '<div class="container-fluid d-flex flex-row justify-content-around align-items-center bg-dark rounded-pill p-md-2 border border-'.$bor.' border-3 text-center">
		        				<img src="'.$foto.'" class="imgrank">
			        			<h3 class="text-light">User: '.$nome.'</h3>
			        			<h3 class="text-light">Rank: #'.$poss.'</h3>
			        			<h3 class="text-light">Punctuation: '.$pont.'</h3>
			        		</div><br>';
			        		echo($texto);
			        		$i++;	
	        			};
	        		?>
	        	</div>
		    </div>
		</div>
	</body>
</html>
<?php
	function cor($nm){
		if($nm == $_SESSION['name']){
			return "light";
		}else{
			return "warning";
		}
	}
?>