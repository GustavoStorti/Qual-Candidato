<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>DD</title>
	<link rel="stylesheet" type="text/css" href="styles/resetar.css"/>
	<style type="text/css"> 
	@import url('https://fonts.googleapis.com/css?family=Nunito');
	@import url('https://fonts.googleapis.com/css?family=Patua+One');
	h2 {
		margin: 30px 0;
		font-size: 40px;
		font-family: 'Patua One', sans-serif;
		text-align: center;
		padding: 1%;
	}
	p{
		font-size: 18px;
		font-family: 'Patua One', sans-serif;
		margin-bottom: 30px;
	}
	figure {
		text-align: center;
		padding-bottom: 30px;
	}
	img {
		width: auto;
		max-width: 100%;
	}
	section {
		max-width: 90%;
		color: #fff;
		box-sizing: border-box;
		margin: 30px auto;
		padding: 10px 20px;
		background: rgba(0,0,0,0.3);
		border-radius: 8px;
	}
	a {
		font-family: 'Patua One', sans-serif;
		color: #fff;
		text-align: center;
		font-size: 20px;
	}
	strong {
		font-weight: 900;
		font-size: 22px;
	}
</style>
</head>
<body>
	<?php 
	session_start();
	$q1  = $_SESSION['q1'];
	$q2  = $_SESSION['q2'];
	$q3  = $_SESSION['q3'];
	$q4  = $_SESSION['q4'];
	$q5  = $_SESSION['q5'];
	$q6  = $_SESSION['q6'];
	$q7  = $_SESSION['q7'];
	$q8  = $_SESSION['q8'];
	$q9  = $_SESSION['q9'];
	$q10 = $_SESSION['q10'];
	$q11 = $_SESSION['q11'];
	$q12 = $_SESSION['q12'];
	$q13 = $_SESSION['q13'];
	$q14 = $_SESSION['q14'];
	$q15 = $_SESSION['q15'];
	$q16 = $_SESSION['q16'];
	$q16 = $_POST['question16'];
	$q17 = $_POST['question17'];
	$q18 = $_POST['question18'];
	$q19 = $_POST['question19'];
	$q20 = $_POST['question20'];
	$x = $q6 + $q7 + $q8 + $q9 + $q10 + $q16 + $q17 + $q18 + $q19 + $q20; 
	$y = $q1 + $q2 + $q3 + $q4 + $q5 + $q11 + $q12 + $q13 + $q14 + $q15; 

	$_SESSION['x'] = $x;
	$_SESSION['y'] = $y;

	//Conecta ao banco de dados
	$mysqli = new mysqli("localhost", "root", "123456", "teste");

	$add = "INSERT INTO questions VALUES (DEFAULT, '$x', '$y', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20');";

	$mysqli->query($add);
	?>
	<section>
		<h2>Resultado</h2>
		<p>
			Como os candidatos ainda não estão bem definidos, exibiremos abaixo apenas o seu resultado individual. Volte em breve e veja o resultado completo, com os pré-candidatos inseridos.
		</p>
		<figure>
			<img src="teste-politico-img.php" alt="Diagrama político com o resultado do teste feito">
			<figcaption><strong>Coordenadas econômicas: <?php echo $x; ?><br/>Coordenadas individuais: <?php echo $y; ?></strong></figcaption>
		</figure>
		<br/>
		<a href="teste1.php"><div>Fazer o teste novamente</div></a>
	</section>
</body>
</html>