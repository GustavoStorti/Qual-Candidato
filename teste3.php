<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Qual Candidato - Teste</title>
	<link rel="stylesheet" type="text/css" href="styles/resetar.css"/>
	<link rel="stylesheet" type="text/css" href="styles/fontes.css"/>
	<link rel="stylesheet" type="text/css" href="styles/teste.css"/>
	<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			window.parent.$('html, body').animate({
				scrollTop: $("#submit-button").offset().top
			}, 900);
		});
	</script>
</head>
<body>
	<?php 
	session_start();
	$_SESSION['q6'] = $_POST['question6'];
	$_SESSION['q7'] = $_POST['question7'];
	$_SESSION['q8'] = $_POST['question8'];
	$_SESSION['q9'] = $_POST['question9'];
	$_SESSION['q10'] = $_POST['question10'];
	?>

	<!--Início do Teste-->
	<form action="teste4.php" method="post">
		<fieldset>
			<label for="question11" class="questao"> <span class="questao-numero">11</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question11" class="radio-btn" value="-2" id="11a" required />
					<label for="11a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question11" class="radio-btn" value="-1" id="11b" />
					<label for="11b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question11" class="radio-btn" value="0" id="11c" />
					<label for="11c" class="escolha">Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question11" class="radio-btn" value="1" id="11d" />
					<label for="11d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question11" class="radio-btn" value="2" id="11e" />
					<label for="11e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question12" class="questao"><span class="questao-numero">12</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question12" class="radio-btn" value="-2" id="12a" required />
					<label for="12a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question12" class="radio-btn" value="-1" id="12b" />
					<label for="12b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question12" class="radio-btn" value="0" id="12c" />
					<label for="12c" class="escolha">Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question12" class="radio-btn" value="1" id="12d" />
					<label for="12d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question12" class="radio-btn" value="2" id="12e" />
					<label for="12e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question13" class="questao"><span class="questao-numero">13</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question13" class="radio-btn" value="-2" id="13a" required />
					<label for="13a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question13" class="radio-btn" value="-1" id="13b" />
					<label for="13b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question13" class="radio-btn" value="0" id="13c" />
					<label for="13c" class="escolha">Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question13" class="radio-btn" value="1" id="13d" />
					<label for="13d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question13" class="radio-btn" value="2" id="13e" />
					<label for="13e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question14" class="questao"><span class="questao-numero">14</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question14" class="radio-btn" value="-2" id="14a" required />
					<label for="14a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question14" class="radio-btn" value="-1" id="14b" />
					<label for="14b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question14" class="radio-btn" value="0" id="14c" />
					<label for="14c" class="escolha">Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question14" class="radio-btn" value="1" id="14d" />
					<label for="14d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question14" class="radio-btn" value="2" id="14e" />
					<label for="14e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question15" class="questao"><span class="questao-numero">15</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question15" class="radio-btn" value="-2" id="15a" required />
					<label for="15a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question15" class="radio-btn" value="-1" id="15b" />
					<label for="15b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question15" class="radio-btn" value="0" id="15c" />
					<label for="15c" class="escolha">Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question15" class="radio-btn" value="1" id="15d" />
					<label for="15d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question15" class="radio-btn" value="2" id="15e" />
					<label for="15e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>
		</fieldset>
		<button type="submit" id="submit-button">Ir para a parte 4/4</button> 
	</form>
	<!--Final do Teste-->
</body>
</html>