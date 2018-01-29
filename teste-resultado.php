<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start();
	$_SESSION['x'] += $_POST['question16'] + $_POST['question17'] + $_POST['question18'] + $_POST['question19'] + $_POST['question20'];

	echo "<h3>X: ".$_SESSION['x']." / Y: ".$_SESSION['y']."</h1>";
	?>
	<img src="gerar.php">
</body>
</html>