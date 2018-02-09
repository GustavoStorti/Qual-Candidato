<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Qual Candidato - Teste</title>
	<link rel="stylesheet" type="text/css" href="styles/resetar.css"/>
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
	$_SESSION['q1'] = $_POST['question1'];
	$_SESSION['q2'] = $_POST['question2'];
	$_SESSION['q3'] = $_POST['question3'];
	$_SESSION['q4'] = $_POST['question4'];
	$_SESSION['q5'] = $_POST['question5'];
	?>

	<!--Início do Teste-->
	<form action="teste3.php" method="post">
		<h2>Sobre liberdades econômicas</h2>
		<fieldset>
			<label for="question6" class="questao"> <span class="questao-numero">6</span> Auxílios sociais como o Bolsa Família diminuem a desigualdade de renda e ajudam no desenvolvimento do país.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question6" class="radio-btn" value="10" id="6a" required />
					<label for="6a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question6" class="radio-btn" value="5" id="6b" />
					<label for="6b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question6" class="radio-btn" value="0" id="6c" />
					<label for="6c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question6" class="radio-btn" value="-5" id="6d" />
					<label for="6d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question6" class="radio-btn" value="-10" id="6e" />
					<label for="6e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question7" class="questao"><span class="questao-numero">7</span> Os direitos relacionados à previdência social como existem hoje são insustentáveis a longo prazo, já que a taxa de natalidade vem diminuindo e a população, envelhecendo. Assim, é necessário que se faça uma reforma para a adequação da previdência à realidade brasileira.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question7" class="radio-btn" value="-10" id="7a" required />
					<label for="7a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question7" class="radio-btn" value="-5" id="7b" />
					<label for="7b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question7" class="radio-btn" value="0" id="7c" />
					<label for="7c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question7" class="radio-btn" value="5" id="7d" />
					<label for="7d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question7" class="radio-btn" value="10" id="7e" />
					<label for="7e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question8" class="questao"><span class="questao-numero">8</span> É necessário que se faça uma reforma agrária no Brasil para corrigir a atual e injusta distribuição de terras, onde alguns proprietários possuem latifúndios de origem duvidosa.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question8" class="radio-btn" value="10" id="8a" required />
					<label for="8a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question8" class="radio-btn" value="5" id="8b" />
					<label for="8b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question8" class="radio-btn" value="0" id="8c" />
					<label for="8c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question8" class="radio-btn" value="-5" id="8d" />
					<label for="8d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question8" class="radio-btn" value="-10" id="8e" />
					<label for="8e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question9" class="questao"><span class="questao-numero">9</span> A privatização é uma boa saída para melhorar a economia do país.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question9" class="radio-btn" value="-10" id="9a" required />
					<label for="9a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question9" class="radio-btn" value="-5" id="9b" />
					<label for="9b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question9" class="radio-btn" value="0" id="9c" />
					<label for="9c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question9" class="radio-btn" value="5" id="9d" />
					<label for="9d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question9" class="radio-btn" value="10" id="9e" />
					<label for="9e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question10" class="questao"><span class="questao-numero">10</span> Já que as corporações podem não proteger o meio ambiente por iniciativa própria, é necessária uma regulação nesse sentido.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question10" class="radio-btn" value="10" id="10a" required />
					<label for="10a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question10" class="radio-btn" value="5" id="10b" />
					<label for="10b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question10" class="radio-btn" value="0" id="10c" />
					<label for="10c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question10" class="radio-btn" value="-5" id="10d" />
					<label for="10d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question10" class="radio-btn" value="-10" id="10e" />
					<label for="10e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>
		</fieldset>
		<button type="submit" id="submit-button">Ir para a parte 3/4</button> 
	</form>
	<!--Final do Teste-->
</body>
</html>