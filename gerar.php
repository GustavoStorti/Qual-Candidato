<?php
session_start();
$x = $_SESSION['x']*10;
$y = $_SESSION['y']*10;

$x += 200;
$y = 200 - $y;

$fundo = imagecreatefrompng("images/diagrama.png");
$marca = imagecreatefrompng("images/ponto.png");
imagecopymerge($fundo, $marca, $x, $y, 0, 0, 20, 20, 100);


header('Content-type: image/jpeg');

imagejpeg($fundo, null, 100);

?>