<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Qual Candidato - Teste</title>
	<link rel="stylesheet" type="text/css" href="https://meyerweb.com/eric/tools/css/reset/reset.css"/>
	<link rel="stylesheet" type="text/css" href="styles/fonts.css"/>
	<link rel="stylesheet" type="text/css" href="styles/test-form.css"/>
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
	$_SESSION['y'] = $_POST['question1'] + $_POST['question2'] + $_POST['question3'] + $_POST['question4'] + $_POST['question5'];
	?>

	<!--Início do Teste-->
	<form action="teste3.php" method="post">
		<fieldset>
			<label for="question6" class="question"> <span class="question-number">6</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question6" class="radio-btn" value="-2" id="6a" required />
					<label for="6a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question6" class="radio-btn" value="-1" id="6b" />
					<label for="6b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question6" class="radio-btn" value="0" id="6c" />
					<label for="6c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question6" class="radio-btn" value="1" id="6d" />
					<label for="6d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question6" class="radio-btn" value="2" id="6e" />
					<label for="6e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question7" class="question"><span class="question-number">7</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question7" class="radio-btn" value="-2" id="7a" required />
					<label for="7a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question7" class="radio-btn" value="-1" id="7b" />
					<label for="7b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question7" class="radio-btn" value="0" id="7c" />
					<label for="7c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question7" class="radio-btn" value="1" id="7d" />
					<label for="7d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question7" class="radio-btn" value="2" id="7e" />
					<label for="7e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question8" class="question"><span class="question-number">8</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question8" class="radio-btn" value="-2" id="8a" required />
					<label for="8a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question8" class="radio-btn" value="-1" id="8b" />
					<label for="8b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question8" class="radio-btn" value="0" id="8c" />
					<label for="8c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question8" class="radio-btn" value="1" id="8d" />
					<label for="8d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question8" class="radio-btn" value="2" id="8e" />
					<label for="8e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question9" class="question"><span class="question-number">9</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question9" class="radio-btn" value="-2" id="9a" required />
					<label for="9a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question9" class="radio-btn" value="-1" id="9b" />
					<label for="9b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question9" class="radio-btn" value="0" id="9c" />
					<label for="9c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question9" class="radio-btn" value="1" id="9d" />
					<label for="9d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question9" class="radio-btn" value="2" id="9e" />
					<label for="9e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question60" class="question"><span class="question-number">10</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question10" class="radio-btn" value="-2" id="10a" required />
					<label for="10a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question10" class="radio-btn" value="-1" id="10b" />
					<label for="10b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question10" class="radio-btn" value="0" id="10c" />
					<label for="10c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question10" class="radio-btn" value="1" id="10d" />
					<label for="10d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question10" class="radio-btn" value="2" id="10e" />
					<label for="10e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>
		</fieldset>
		<button type="submit" id="submit-button">Ir para a parte 3/4</button> 
	</form>
	<!--Final do Teste-->
</body>
</html>