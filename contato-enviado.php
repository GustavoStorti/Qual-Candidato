<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Nunito');
p,a {
	font-family: 'Nunito', sans-serif;
	color: #fff;
	text-align: center;
	font-weight: 700;
}

.form-message {
	max-width: 350px;
	margin: 120px auto 15px auto;
	padding: 10px 20px;
	border-radius: 8px;
	font-size: 20px;
	background: rgba(0,0,0,0.3);
}

.form-new-message {
	font-size: 16px;
}
</style>

<?php 
$to = "contato@qualcandidato.com.br";
$subject = "Contato - ".$_POST['motivo'];
$message = "NOME:  ".$_POST['nome']."\nE-MAIL:  ".$_POST['email']."\nMENSAGEM:    ".$_POST['mensagem'];
$header = "From: envio@qualcandidato.com.br\r\nContent-Type: text/plain; charset=utf-8\r\n";

if (mail($to, $subject, $message, $header)) { ?>	
<p class="form-message">Mensagem enviada com sucesso!</p>
<?php } else { ?>	
<p class="form-message">Mensagem não enviada</p>
<?php } ?>

<p><a class="form-new-message" href="contato.html">Enviar uma nova mensagem</a></p>