<link rel="stylesheet" type="text/css" href="styles/fonts.css"/>
<style type="text/css">
iframe#contato-iframe {
	width: 100%;
	height: 600px;
	border: none;
	overflow: hidden;
} 
/*Página form.php*/
.form-message {
	font-family: 'Nunito', sans-serif;
	max-width: 350px;
	margin: 120px auto 15px auto;
	padding: 10px 20px;
	border-radius: 8px;
	text-align: center;
	font-size: 20px;
	color: #fff;
	font-weight: 700;
	background: rgba(0,0,0,0.3);
}

.form-new-message {
	display: block;
	font-family: 'Nunito', sans-serif;
	text-align: center;
	font-size: 16px;
	color: #fff;
	font-weight: 700;
}
</style>

<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);


$name = $_POST['name'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$message = "NOME:  $name\n\n";
$message .= "E-MAIL: $email\n\n";
$message .= "MENSAGEM: ".$_POST['message'];

$to = "contato@qualcandidato.com.br";
$subject = "Contato - ".$reason;
$header = "From: $email\r\n";
$header .= "Content-Type: text/plain; charset=utf-8\r\n"; 

if (mail($to, $subject, $message, $header)) { ?>	
<p class="form-message">Mensagem enviada com sucesso!</p>
<?php } else { ?>	
<p class="form-message">Mensagem não enviada</p>
<?php } ?>

<p><a class="form-new-message" href="contato.html">Enviar uma nova mensagem</a></p>