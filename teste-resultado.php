<!DOCTYPE html>
<html>
<head>
	<title></title>
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

	echo "<h3>X: ".$_SESSION['x']." / Y: ".$_SESSION['y']."</h1>";

	// Salva no banco de dados
	//Conecta ao banco de dados
	$mysqli = new mysqli("localhost", "root", "123456", "teste");

	$add = "INSERT INTO questions VALUES (DEFAULT, '$x', '$y', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$q16', '$q17', '$q18', '$q19', '$q20');";

	$mysqli->query($add);
	?>
	<img src="gerar.php">
</body>
</html>