<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Qual Candidato - Teste</title>
	<link rel="stylesheet" type="text/css" href="styles/resetar.css"/>
	<link rel="stylesheet" type="text/css" href="styles/teste.css"/>
	<script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		/*
		jQuery(document).ready(function() {
			$("#submit-button").click(function() {
				window.parent.$('html, body').animate({
					scrollTop: $("#submit-button").offset().top
				}, 900);
			});
		});
		*/
	</script>
</head>
<body>
	<!--Início do Teste-->
	<form action="teste2.php" method="post">
		<h2>Sobre liberdades individuais</h2>
		<fieldset>
			<label for="question1" class="questao"> <span class="questao-numero">1</span> A posse e o porte de armas de fogo devem ser permitidos a todos os cidadãos que não possuem pendências com a justiça.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question1" class="radio-btn" value="-10" id="1a" required />
					<label for="1a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question1" class="radio-btn" value="-5" id="1b" />
					<label for="1b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question1" class="radio-btn" value="0" id="1c" />
					<label for="1c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question1" class="radio-btn" value="5" id="1d" />
					<label for="1d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question1" class="radio-btn" value="10" id="1e" />
					<label for="1e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question2" class="questao"><span class="questao-numero">2</span> O aborto até o terceiro mês de gestação deve ser descriminalizado em todos os casos.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question2" class="radio-btn" value="-10" id="2a" />
					<label for="2a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question2" class="radio-btn" value="-5" id="2b" />
					<label for="2b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question2" class="radio-btn" value="0" id="2c" />
					<label for="2c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question2" class="radio-btn" value="5" id="2d" />
					<label for="2d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question2" class="radio-btn" value="10" id="2e" />
					<label for="2e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question3" class="questao"><span class="questao-numero">3</span> A pena de morte deveria existir para a maioria dos crimes hediondos.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question3" class="radio-btn" value="10" id="3a" required />
					<label for="3a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question3" class="radio-btn" value="5" id="3b" />
					<label for="3b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question3" class="radio-btn" value="0" id="3c" />
					<label for="3c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question3" class="radio-btn" value="-5" id="3d" />
					<label for="3d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question3" class="radio-btn" value="-10" id="3e" />
					<label for="3e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question4" class="questao"><span class="questao-numero">4</span> O uso recreativo de maconha, bem como sua comercialização, devem ser legalizados.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question4" class="radio-btn" value="-10" id="4a" required />
					<label for="4a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question4" class="radio-btn" value="-5" id="4b" />
					<label for="4b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question4" class="radio-btn" value="0" id="4c" />
					<label for="4c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question4" class="radio-btn" value="5" id="4d" />
					<label for="4d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question4" class="radio-btn" value="10" id="4e" />
					<label for="4e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>

			<label for="question5" class="questao"><span class="questao-numero">5</span> O Estado não deveria ser laico, pois o povo brasileiro, em sua maior parte, é cristão. Assim, princípios religiosos importantes deveriam ser ensinados nas escolas.</label>
			<ul class="resposta">
				<li class="resposta-item">
					<input type="radio" name="question5" class="radio-btn" value="10" id="5a" required />
					<label for="5a" class="escolha">Discordo Totalmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question5" class="radio-btn" value="5" id="5b" />
					<label for="5b" class="escolha">Discordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question5" class="radio-btn" value="0" id="5c" />
					<label for="5c" class="escolha">Neutro / Não Sei</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question5" class="radio-btn" value="-5" id="5d" />
					<label for="5d" class="escolha">Concordo Parcialmente</label>
				</li>
				<li class="resposta-item">
					<input type="radio" name="question5" class="radio-btn" value="-10" id="5e" />
					<label for="5e" class="escolha">Concordo Totalmente</label>
				</li>
			</ul>
		</fieldset>
		<button type="submit" id="submit-button">Ir para a parte 2/4</button> 
	</form>
	<!--Final do Teste-->
</body>
</html>