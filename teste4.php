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
	$_SESSION['y'] += $_POST['question11'] + $_POST['question12'] + $_POST['question13'] + $_POST['question14'] + $_POST['question15'];
	?>

	<!--Início do Teste-->
	<form action="teste-resultado.php" method="post">
		<fieldset>
			<label for="question16" class="question"> <span class="question-number">16</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question16" class="radio-btn" value="-2" id="16a" required />
					<label for="16a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question16" class="radio-btn" value="-1" id="16b" />
					<label for="16b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question16" class="radio-btn" value="0" id="16c" />
					<label for="16c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question16" class="radio-btn" value="1" id="16d" />
					<label for="16d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question16" class="radio-btn" value="2" id="16e" />
					<label for="16e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question17" class="question"><span class="question-number">17</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question17" class="radio-btn" value="-2" id="17a" required />
					<label for="17a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question17" class="radio-btn" value="-1" id="17b" />
					<label for="17b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question17" class="radio-btn" value="0" id="17c" />
					<label for="17c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question17" class="radio-btn" value="1" id="17d" />
					<label for="17d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question17" class="radio-btn" value="2" id="17e" />
					<label for="17e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question18" class="question"><span class="question-number">18</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question18" class="radio-btn" value="-2" id="18a" required />
					<label for="18a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question18" class="radio-btn" value="-1" id="18b" />
					<label for="18b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question18" class="radio-btn" value="0" id="18c" />
					<label for="18c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question18" class="radio-btn" value="1" id="18d" />
					<label for="18d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question18" class="radio-btn" value="2" id="18e" />
					<label for="18e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question19" class="question"><span class="question-number">19</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question19" class="radio-btn" value="-2" id="19a" required />
					<label for="19a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question19" class="radio-btn" value="-1" id="19b" />
					<label for="19b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question19" class="radio-btn" value="0" id="19c" />
					<label for="19c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question19" class="radio-btn" value="1" id="19d" />
					<label for="19d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question19" class="radio-btn" value="2" id="19e" />
					<label for="19e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question20" class="question"><span class="question-number">20</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor nunc, aliquam vitae laoreet blandit, laoreet eget felis?</label>
			<ul class="answer">
				<li class="answer-item">
					<input type="radio" name="question20" class="radio-btn" value="-2" id="20a" required />
					<label for="20a" class="choise">Discordo Totalmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question20" class="radio-btn" value="-1" id="20b" />
					<label for="20b" class="choise">Discordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question20" class="radio-btn" value="0" id="20c" />
					<label for="20c" class="choise">Não Sei</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question20" class="radio-btn" value="1" id="20d" />
					<label for="20d" class="choise">Concordo Parcialmente</label>
				</li>
				<li class="answer-item">
					<input type="radio" name="question20" class="radio-btn" value="2" id="20e" />
					<label for="20e" class="choise">Concordo Totalmente</label>
				</li>
			</ul>
		</fieldset>
		<button type="submit" id="submit-button">Finalizar Teste</button> 
	</form>
	<!--Final do Teste-->
</body>
</html>