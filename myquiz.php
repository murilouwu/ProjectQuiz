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
		<script src="java/fun2.js"></script>
		<link rel="shortcut icon" href="img/logo.png">
		<title>Make</title>
	</head>
	<body style="overflow: hidden;">
		<div class="all">
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
			                	<a class="nav-link text-warning linkcss" aria-current="page" href="rank.php"><strong>Ranking</strong></a>
			                </li>
			                <li class="nav-item">
			                	<a class="nav-link text-warning linkcss" aria-current="page" href="jogos.php"><strong>Play</strong></a>
			                </li>
			        	</ul>
			        </div>
		        </div>
		    </nav>
		    <div class="container d-flex flex-column justify-content-center text-center p-md-3">
		    	<h1 class="fw-normal text-light">Create:</h1>
		    	<div class="d-flex flex-row justify-content-around text-center align-items-center p-md-3">
	        		<button type="button" class="btn btn-dark text-warning rounded-pill" style="width: 20vw;" onclick="ocultarA('quiz','categoria','pergunta','alternativa')"><strong>Quiz</strong></button>
	        	</div>
		    </div>
		    <div class="container-fluid d-flex justify-content-center margin">
		        <form id="quiz" class="card bg-dark text-center border border-warning border-5 border border-warning" style="width: 30vw; border-radius: 25px; display: none;" method="post">
		        	<div class="card-body container-fluid d-flex flex-column justify-content-center">
		        		<button onclick="desasparecer('quiz','categoria','pergunta','alternativa')" class="exit btn btn-warning text-light"><strong>X</strong></button>
		        		<h1 class="text-light fw-bolder card-title">Quiz</h1>

		        		<label class="form-label text-light fw-bolder">Name:</label>
		        			<input type="text" name="nomeQ" class="form-control bg-dark text-light border border-warning border-3" style="border-radius: 25px;">
		        		<label class="form-label text-light fw-bolder">Category:</label>
		        			<select id="select1" class="form-select bg-dark text-light border border-warning border-3" style="border-radius: 25px;" name="select1">
		        				<?php
				        			$sql0 ='SELECT * FROM categoria';
				        			$res0 = $con->query($sql0);
				        			$row = $res0->num_rows + 1;
				        			$i = 1;
				        			while($i<$row){ 
				        				$sql ='SELECT * FROM categoria WHERE cd='.$i.'';
					        			$res = $con->query($sql);
						    			$categoria = $res->fetch_object();
						    			$cd = $categoria->cd;
						    			$nome = $categoria->nome;
					        			$texto = '<option value="'.$cd.'">'.$nome.'</option>';
						        		echo($texto);
						        		$i++;
				        			};
				        		?>
		        			</select>
		        			<button type="button" class="btn btn-dark text-warning" onclick="ocultarA('categoria','quiz','pergunta','alternativa')">+ Categories</button>
		        		<label class="form-label text-light fw-bolder">Add Questions:</label>
		        		<button type="button" class="btn btn-dark text-warning" onclick="ocultarA('pergunta','categoria','quiz','alternativa')">+ Questions</button>
		        		<input type="submit" class="form-control bg-dark text-warning border border-warning border-3" name="enviar001" value="TO SEND" style="border-radius: 25px;">
		        	</div>
		        </form>
		        <form id="categoria" class="card bg-dark text-center border border-warning border-5 border border-warning" style="width: 30vw; border-radius: 25px; display: none;" method="post">
		        	<div class="card-body container-fluid d-flex flex-column justify-content-center">
		        		<button onclick="desasparecer('quiz','categoria','pergunta','alternativa')" class="exit btn btn-warning text-light"><strong>X</strong></button>
		        		<h1 class="text-light fw-bolder card-title">Category:</h1>

		        		<label class="form-label text-light fw-bolder">Name:</label>
		        			<input type="text" name="nomeCt" class="form-control bg-dark text-light border border-warning border-3" style="border-radius: 25px;">
		        		<input type="submit" class="form-control bg-dark text-warning border border-warning border-3" name="enviar002" value="TO SEND" style="border-radius: 25px;">
		        	</div>
		        </form>
		        <form id="pergunta" class="card bg-dark text-center border border-warning border-5 border border-warning" style="width: 30vw; border-radius: 25px; display: none;" method="post">
		        	<div class="card-body container-fluid d-flex flex-column justify-content-center">
		        		<button onclick="desasparecer('quiz','categoria','pergunta','alternativa')" class="exit btn btn-warning text-light"><strong>X</strong></button>
		        		<h1 class="text-light fw-bolder card-title">Question</h1>

		        		<label class="form-label text-light fw-bolder">Quiz:</label>
		        			<select id="select2" class="form-select bg-dark text-light border border-warning border-3" style="border-radius: 25px;" name="select2">
		        				<?php
				        			$sql0 ='SELECT * FROM jogo';
				        			$res0 = $con->query($sql0);
				        			$row = $res0->num_rows + 1;
				        			$i = 1;
				        			while($i<$row){ 
				        				$sql ='SELECT * FROM jogo WHERE cd='.$i.'';
					        			$res = $con->query($sql);
						    			$jogo = $res->fetch_object();
						    			$cd = $jogo->cd;
						    			$nome = $jogo->nome;
						    			$user = $jogo->id_usuario;
						    			if($user == $_SESSION['cd']){
						    				$texto = '<option value="'.$cd.'">'.$nome.'</option>';
						    				echo($texto);
						    			}
						        		$i++;
				        			};
				        		?>
		        			</select>
		        			<button type="button" class="btn btn-dark text-warning" onclick="ocultarA('quiz','categoria','pergunta','alternativa')">+ Quizzes</button>
		        		<label class="form-label text-light fw-bolder">Write the Question</label>
		        			<input type="text" name="pergunta" class="form-control bg-dark text-light border border-warning border-3" style="border-radius: 25px;">
		        			<button type="button" class="btn btn-dark text-warning" onclick="ocultarA('alternativa','categoria','quiz','pergunta')">+ Alternatives</button>
		        		<input type="submit" class="form-control bg-dark text-warning border border-warning border-3" name="enviar003" value="TO SEND" style="border-radius: 25px;">
		        	</div>
		        </form>
		        <form id="alternativa" class="card bg-dark text-center border border-warning border-5 border border-warning" style="width: 30vw; border-radius: 25px; display: none;" method="post">
		        	<div class="card-body container-fluid d-flex flex-column justify-content-center">
		        		<button onclick="desasparecer('quiz','categoria','pergunta','alternativa')" class="exit btn btn-warning text-light"><strong>X</strong></button>
		        		<h1 class="text-light fw-bolder card-title">Alternative</h1>

		        		<label class="form-label text-light fw-bolder">Question:</label>
		        			<select id="select3" class="form-select bg-dark text-light border border-warning border-3" style="border-radius: 25px;" name="select3">
		        				<?php
				        			$sql0 ='SELECT * FROM pergunta';
				        			$res0 = $con->query($sql0);
				        			$row = $res0->num_rows + 1;
				        			$i = 1;
				        			while($i<$row){ 
				        				//peguar pergunta
				        				$sql ='SELECT * FROM pergunta WHERE cd='.$i.'';
					        			$res = $con->query($sql);
						    			$jogo = $res->fetch_object(); 
						    			$cd = $jogo->cd;
						    			$nome = $jogo->nome;
						    			$cdquiz = $jogo->id_jogo;
						    			//peguar quiz:
						    			$sql1 ='SELECT * FROM jogo WHERE cd='.$cdquiz.'';
						    			$res1 = $con->query($sql1);
						    			$quiz = $res1->fetch_object();
						    			$nomequiz = $quiz->nome; 
						    			$user = $quiz->id_usuario;
										//escrever						    			
					        			if($user == $_SESSION['cd']){
						    				$texto = '<option value="'.$cd.'">'.$nome.' do quiz: '.$nomequiz.'</option>';
						    				echo($texto);
						    			}
						        		$i++;
				        			};
				        		?>
		        			</select>
		        			<button type="button" class="btn btn-dark text-warning" onclick="ocultarA('pergunta','categoria','quiz','alternativa')">+ pergunta</button>
		        		<label class="form-label text-light fw-bolder">Escreva a alternativa</label>
		        			<input type="text" name="alternativa" class="form-control bg-dark text-light border border-warning border-3" style="border-radius: 25px;">
		        		<label class="form-label text-light fw-bolder">Está correta?</label>
		        			<input type="checkbox" name="coreta" value="1" style="margin-left: 50%;">
		        		<input type="submit" class="form-control bg-dark text-warning border border-warning border-3" name="enviar004" value="TO SEND" style="border-radius: 25px;">
		        	</div>
		        </form>
	        </div>
	        <div id="des" class="container flex-column justify-content-center">
	        	<div class="d-flex flex-column justify-content-center text-center align-items-center p-md-3">
	        		<h1 class="fw-normal text-light"><b>-YOUR QUIZ-</b></h1>
	        	</div>
	        	<?php
	        		//sql categoria:
	        		$sql0 ='SELECT * FROM categoria';
        			$res0 = $con->query($sql0);
        			$row = $res0->num_rows + 1;
        			$i = 1;
        			while($i<$row){ 
        				$sql ='SELECT * FROM categoria WHERE cd='.$i.'';
	        			$res = $con->query($sql);
		    			$categoria = $res->fetch_object();
		    			$cd = $categoria->cd;
		    			$nome = $categoria->nome;
		    			//gravar categoria
	        			$texto = '<div class="d-flex flex-column justify-content-center text-center align-items-center p-md-3">
			        		<h1 class="fw-normal text-light">quiz about: '.$nome.'</h1>
			        	</div>';
		        		echo($texto);
		        		$i++;
		        		//sql jogo
		        		$sql2 ='SELECT * FROM jogo';
	        			$res2 = $con->query($sql2);
	        			$row2 = $res2->num_rows + 1;
	        			$i2 = 1;
	        			while($i2<$row2){
	        				//peguar jogo
	        				$sql3 ='SELECT * FROM jogo WHERE cd='.$i2.'';
		        			$res3 = $con->query($sql3);
			    			$jogo = $res3->fetch_object();
		    				$idcat = $jogo->id_categoria;
			    			$cda = $jogo->cd;
			    			$user = $jogo->id_usuario;
			    			$nomea = $jogo->nome;
			    			
			    			if($user == $_SESSION['cd']){
			    				$textoA ="";
				    			//sql pergunta
						    	$sql25 ='SELECT * FROM pergunta';
			        			$res25 = $con->query($sql25);
			        			$row25 = $res25->num_rows + 1;
			        			$i25 = 1;
			        			$number = 0;
						    	while($i25<$row25){
						    		$cod = 'SELECT * FROM pergunta WHERE cd='.$i25.'';
						    		$ex = $con->query($cod);
						    		$quest = $ex->fetch_object();
						    		$idquiz = $quest->id_jogo;
						    		if ($idquiz==$cda){
						    			$number = $number + 1;
						    		}
						    		$i25++;
						    	};
				    			if($idcat==$cd){
				        			$textoA = $textoA.'<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
								        			<h2 class="text-light">'.$nomea.'</h2>
								        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
								        			<h6 class="text-light">category: '.$nome.'</h6>
								        			<h6 class="text-light">Questions: '.$number.'</h6>
								        		</div>
							        		</div>';
				        		};
				        		$a = '<div class="d-flex flex-row overflow-auto" style="width: 80vw;"><div class="d-flex flex-row">'.$textoA.'</div></div>';
					        	echo($a);
			    			}
			    			$i2++;
			    		};
        			};
	        	?>
	        </div>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['enviar001'])){
		$sql0 = 'SELECT * FROM jogo WHERE nome = "'.$_POST['nomeQ'].'"';
		$res = $con->query($sql0);
		if($res->num_rows < 1){
			$sql2 = 'SELECT MAX(cd) AS poss FROM jogo';
		    $res2 = $con->query($sql2);
		    $list = $res2->fetch_object();
			$cd = fun($list->poss) +1;
			$cate = $_POST['select1'];
			$sql= 'INSERT INTO jogo (cd, nome, id_usuario, id_categoria) VALUES ("'.$cd.'","'.$_POST['nomeQ'].'","'.$_SESSION['cd'].'","'.$cate.'")';
			$resultado = $con->query($sql);
			vai('myquiz.php');
			if(!$resultado){
				msg("erro ao cadastrar.");
			}
		}else{
			msg("Categoria já existe");
		}
	}
	if(isset($_POST['enviar003'])){
		$sql0 = 'SELECT * FROM pergunta WHERE nome = "'.$_POST['pergunta'].'"';
		$res = $con->query($sql0);
		if($res->num_rows < 1){
			$sql2 = 'SELECT MAX(cd) AS poss FROM pergunta';
		    $res2 = $con->query($sql2);
		    $list = $res2->fetch_object();
			$cd = fun($list->poss) +1;
			$quiz = $_POST['select2'];
			$sql= 'INSERT INTO pergunta (cd, nome, id_jogo) VALUES ("'.$cd.'","'.$_POST['pergunta'].'","'.$quiz.'")';
			$resultado = $con->query($sql);
			vai('myquiz.php');
			if(!$resultado){
				msg("erro ao cadastrar.");
			}
		}else{
			msg("Categoria já existe");
		}
	}
	if(isset($_POST['enviar002'])){
		$sql0 = 'SELECT * FROM categoria WHERE nome = "'.$_POST['nomeCt'].'"';
		$res = $con->query($sql0);
		if($res->num_rows < 1){
			$sql2 = 'SELECT MAX(cd) AS poss FROM categoria';
		    $res2 = $con->query($sql2);
		    $list = $res2->fetch_object();
			$cd = fun($list->poss) +1;
			$sql= 'INSERT INTO categoria (cd, nome) VALUES ("'.$cd.'","'.$_POST['nomeCt'].'")';
			$resultado = $con->query($sql);
			if(!$resultado){
				msg("erro ao cadastrar.");
			}
			vai('myquiz.php');
		}else{
			msg("Categoria já existe");
		}
	}
	if(isset($_POST['enviar004'])){
		$sql0 = 'SELECT * FROM alternativa WHERE texto = "'.$_POST['alternativa'].'"';
		$res = $con->query($sql0);
		if($res->num_rows < 1){
			$sql2 = 'SELECT MAX(cd) AS poss FROM pergunta';
		    $res2 = $con->query($sql2);
		    $list = $res2->fetch_object();
			$cd = fun($list->poss) +1;
			$pergunta = $_POST['select3'];
			$true = funa(isset($_POST['coreta']));
			$sql= 'INSERT INTO alternativa (cd, texto, resposta, id_pergunta) VALUES ("'.$cd.'","'.$_POST['alternativa'].'","'.$true.'","'.$pergunta.'")';
			$resultado = $con->query($sql);
			vai('myquiz.php');
			if(!$resultado){
				msg("erro ao cadastrar.");
			}
		}else{
			msg("Categoria já existe");
		}
	}
?>