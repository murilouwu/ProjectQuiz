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
	        		<button type="button" class="btn btn-dark text-warning rounded-pill" style="width: 20vw;" onclick="ocultarA('quiz','categoria','pergunta','alternativa','des')"><strong>Quiz</strong></button>
	        		<button type="button" class="btn btn-dark text-warning rounded-pill" style="width: 20vw;" onclick="ocultarA('categoria','quiz','pergunta','alternativa','des')"><strong>Category</strong></button>
	        		<button type="button" class="btn btn-dark text-warning rounded-pill" style="width: 20vw;" onclick="ocultarA('pergunta','categoria','quiz','alternativa','des')"><strong>Question</strong></button>
	        		<button type="button" class="btn btn-dark text-warning rounded-pill" style="width: 20vw;" onclick="ocultarA('alternativa','categoria','quiz','pergunta','des')"><strong>Alternative</strong></button>
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
		        			<select id="select1" class="form-select bg-dark text-light border border-warning border-3" style="border-radius: 25px;">
		        				<option value="1">Category 1</option>
		        				<option value="2">Category 2</option>
		        				<option value="3">Category 3</option>
		        			</select>
		        			<button type="button" class="btn btn-dark text-warning" onclick="ocultarA('categoria','quiz','pergunta','alternativa')">+ Categories</button>
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
		        			<select id="select2" class="form-select bg-dark text-light border border-warning border-3" style="border-radius: 25px;">
		        				<option value="1">Quiz 1</option>
		        				<option value="2">Quiz 2</option>
		        				<option value="3">Quiz 3</option>
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
		        			<select id="select3" class="form-select bg-dark text-light border border-warning border-3" style="border-radius: 25px;">
		        				<option value="0">Question 1</option>
		        				<option value="1">Question 2</option>
		        				<option value="2">Question 3</option>
		        				<option value="3">+</option>
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

	        		<h1 class="fw-normal text-light">Quiz feitos:</h1>
	        	</div>
	        	<div id="des" class="d-flex flex-row overflow-auto" style="width: 80vw;">
	        		<div class="d-flex flex-row">
	        			<!--1 a 5-->
	        			<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
		        		<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
		        		<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
		        		<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
		        		<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
	        		</div>
	        		<div class="d-flex flex-row">
	        			<!--1 a 5-->
	        			<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
		        		<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
		        		<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
		        		<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
		        		<div class="collumn bg-dark text-center rounded-3 p-md-2" style="margin-right: 1vh; width: 15vw;">
		        			<h2 class="text-light">name 1</h2>
		        			<a class="nav-link text-light linkcss" href="quest.php"><strong>Play</strong></a>
		        			<h6 class="text-light">category: mathematics</h6>
		        			<h6 class="text-light">Questions: 10</h6>
		        		</div>
	        		</div>
	        	</div>
	        </div>
		</div>
	</body>
</html>