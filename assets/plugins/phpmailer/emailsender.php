<?php
echo "<h1> HERE </h1>";	
printf('CHEGOU AQUI');

		//http://127.0.0.1//				wp-content/themes/niknights/assets/plugins/phpmailer/emailsender.php 
		//D:\HIL\HTDOCS\NerdIgnorante\		wp-content\themes\niknights\assets\plugins\phpmailer

/*

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


<?php
$setor = $_POST['contatoSetor'];
$nome = $_POST['contatoNome'];
$email = trim($_POST['contatoEmail']);
$telefone = trim($_POST['contatoTelefone']);
$mensagem = $_POST['contatoMensagem'];

if($setor=='administracao-e-financas'){
	$emailPara = 'saf.prefeitura@quata.sp.gov.br';
}elseif($setor=='agricultura-e-meio-ambiente'){
	$emailPara = 'agricultura@quata.sp.gov.br';
}elseif($setor=='assuntos-juridicos'){
	$emailPara = 'juridico@quata.sp.gov.br';

}elseif($setor=='cultura-e-turismo'){
	$emailPara = '@quata.sp.gov.br';    // falta criar email!
}elseif($setor=='educacao'){
	$emailPara = 'departamentoeducacaoquata@quata.sp.gov.br';
}elseif($setor=='esporte-e-lazer'){
	$emailPara = 'prefeituraquata@quata.sp.gov.br';
}elseif($setor=='fundo-de-promocao-social'){
	$emailPara = 'assistenciasocial@quata.sp.gov.br';
}elseif($setor=='imprensa' || $setor=='outros'){
	$emailPara = 'imprensa@quata.sp.gov.br';
}elseif($setor=='infraestrutura-urbanizacao-e-servicos'){
	$emailPara = 'imprensa@quata.sp.gov.br';
}elseif($setor=='planejamento-obras-e-dessenvolvimento'){
	$emailPara = 'almoxarifado@quata.sp.gov.br';
}elseif($setor=='saude'){
	$emailPara = 'saude@quata.sp.gov.br';
}

$body = "Mensagem enviada através do site Quata.sp.gov.br<br /><br />";
$body .= "<br /><strong>De: </strong>".$nome;
if($email!=''){
	$body .= "<br /><strong>Email: </strong>".$email;
}
if($telefone!=''){
	$body .= "<br /><strong>Telefone: </strong>".$telefone;
}
$body .= "<br /><strong>Mensagem:</strong><br />".$mensagem;

require_once("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth   = true;
$mail->Port       = 587; 
// $mail->Host       = "smtp.quata.sp.gov.br";
$mail->Host       = "smtp.kinghost.net";
$mail->Username   = "web@quata.sp.gov.br";
$mail->Password   = "qta011";

$mail->From = $emailPara;
$mail->FromName = utf8_decode('WebSite de Quatá');
$mail->AddAddress($emailPara);
$mail->IsHTML(true);
$mail->Subject = utf8_decode('Contato via WebSite');
$mail->Body = utf8_decode($body);
$mail->AltBody = utf8_decode(strip_tags($body));

if(!$mail->Send()){
	$msg = 'Erro ao enviar a mensagem. Tente novamente mais tarde.';
}else{
	$msg = 'Mensagem enviada com sucesso.';
} 

$mail->ClearAllRecipients();
$mail->ClearAttachments();   
?>
<div id="mensagem-atualizacao">
	<br /><br />
	<?php echo($msg); ?>
	<br /><br /><br />
</div>
*/