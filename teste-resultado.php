	<?php 
	session_start();
	$_SESSION['x'] += $_POST['question16'] + $_POST['question17'] + $_POST['question18'] + $_POST['question19'] + $_POST['question20'];

	echo "<h1>X: ".$_SESSION['x']."</h1>";
	echo "<h1>Y: ".$_SESSION['y']."</h1>";
	?>