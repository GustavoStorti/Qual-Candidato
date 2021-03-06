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
			$("#submit-button").click(function() {
				window.parent.$('html, body').animate({
					scrollTop: $("#submit-button").offset().top
				}, 900);
			});
		});
	</script>
</head>
<body>
	<?php 
	session_start();
	$_SESSION['q11'] = $_POST['question11'];
	$_SESSION['q12'] = $_POST['question12'];
	$_SESSION['q13'] = $_POST['question13'];
	$_SESSION['q14'] = $_POST['question14'];
	$_SESSION['q15'] = $_POST['question15'];
	?>

	<!--Início do Teste-->
	<form action="teste-resultado.php" method="post">
		<h2>Sobre liberdades econômicas</h2>
		<fieldset>
			<label for="question16" class="questao"> <span class="questao-numero">16</span> O excesso de direitos trabalhistas mais prejudica do que ajuda os trabalhadores.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question16" class="radio-btn" value="-10" id="16a" required />
					<label for="16a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question16" class="radio-btn" value="-5" id="16b" />
					<label for="16b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question16" class="radio-btn" value="0" id="16c" />
					<label for="16c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question16" class="radio-btn" value="5" id="16d" />
					<label for="16d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question16" class="radio-btn" value="10" id="16e" />
					<label for="16e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question17" class="questao"><span class="questao-numero">17</span> Serviços de transporte remunerado por aplicativos, tal como o Uber, devem ser banidos, pois atuam na clandestinidade e destroem muitos postos legítimos de trabalho.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question17" class="radio-btn" value="10" id="17a" required />
					<label for="17a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question17" class="radio-btn" value="5" id="17b" />
					<label for="17b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question17" class="radio-btn" value="0" id="17c" />
					<label for="17c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question17" class="radio-btn" value="-5" id="17d" />
					<label for="17d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question17" class="radio-btn" value="-10" id="17e" />
					<label for="17e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question18" class="questao"><span class="questao-numero">18</span> Quanto mais livre é o mercado, mais livres são as pessoas.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question18" class="radio-btn" value="-10" id="18a" required />
					<label for="18a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question18" class="radio-btn" value="-5" id="18b" />
					<label for="18b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question18" class="radio-btn" value="0" id="18c" />
					<label for="18c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question18" class="radio-btn" value="5" id="18d" />
					<label for="18d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question18" class="radio-btn" value="10" id="18e" />
					<label for="18e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question19" class="questao"><span class="questao-numero">19</span> Igualdade é mais importante do que crescimento econômico.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question19" class="radio-btn" value="10" id="19a" required />
					<label for="19a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question19" class="radio-btn" value="5" id="19b" />
					<label for="19b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question19" class="radio-btn" value="0" id="19c" />
					<label for="19c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question19" class="radio-btn" value="-5" id="19d" />
					<label for="19d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question19" class="radio-btn" value="-10" id="19e" />
					<label for="19e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question20" class="questao"><span class="questao-numero">20</span> Não devemos fazer uma auditoria da dívida pública e muito menos deixar de pagá-la, pois a consequência disso seria uma piora drástica da situação econômica brasileira.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question20" class="radio-btn" value="-10" id="20a" required />
					<label for="20a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question20" class="radio-btn" value="-5" id="20b" />
					<label for="20b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question20" class="radio-btn" value="0" id="20c" />
					<label for="20c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question20" class="radio-btn" value="5" id="20d" />
					<label for="20d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question20" class="radio-btn" value="10" id="20e" />
					<label for="20e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>
		</fieldset>
		<button type="submit" id="submit-button">Finalizar Teste</button> 
	</form>
	<!--Final do Teste-->
</body>
</html>