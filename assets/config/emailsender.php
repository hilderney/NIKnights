<?php
	//http://127.0.0.1/edsa-NI/		wp-content/themes/niknights/assets/plugins/phpmailer/emailsender.php 
	//D:\HIL\HTDOCS\NerdIgnorante\	wp-content\themes\niknights\assets\plugins\phpmailer

$to = 'nerdignorante@nerdignorante.com.br';
$from = strtolower( $_POST['from'] );
$sector = strtoupper ( $_POST['sector'] );
$subject = strtolower( $_POST['subject'] );
$body = $_POST['body'];
$enc = "utf-8";
$subject_preferences = array(
    "input-charset" => $enc,
    "output-charset" => $enc,
    "line-length" => 76,
    "line-break-chars" => "\r\n"
);

$fullsubject = $sector . ' - ' . $subject;
$header = 'Content-type: text/html; charset='.$enc . " \r\n";
$header .= 'From: ' . $from . " \r\n";
$header .= 'Date: ' . date("d-m-Y H:i:s") . " \r\n";
$header .= iconv_mime_encode('Subject', $fullsubject, $subject_preferences);

$body = str_replace("\n.", "\n..", $body);
$body = wordwrap($body, 70);

$message = '<html>
<head>
	<title>' . $subject . '</title>
</head>
<body>

<ul>
	<li><b>' . $from . '</b></li>
	<li><b>' . date("d-m-Y H:i:s") . '</b></li>
	<li><b>' . $sector . '</b></li>
	<li><b>' . $subject . '</b></li>
</ul>
<br/>
<p>' . $body . '</p>
</body>
</html>';

$sent = mail( $to, $subject, $message, $header );

if ($sent) {
	printf('Email enviado como ' . $from . '! Obrigado pelo contato');
}
else {
	printf('Não foi possível enviar o email agora, tente novamente mais tarte');
}