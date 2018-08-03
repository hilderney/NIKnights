<div id="contact-section">
	<div class="sub-title hide">
		<h2 class="cl-light"> Contato </h2>
	</div>
	
	<div class="container">
			<div class="header">
				<h1> Fale conosco </h1>
			</div>
			<div class="content">
				<div id="emailSenderContainer">
					<p>
						Este formulário envia um email para os administradores do Nerd Ignorante.
						Primeiro preencha seu <b>Email de contato</b>, escolha qual <b>Tópico</b> gostaria de abordar.
						Descreva brevemente um <b>Assunto</b> e escreva sua <b>Mensagem</b>.
					</p>
					<ul>
						<li> <b> NI Talk </b> - <em> email lido em nosso Podcast </em> </li>
						<li> <b> Parceria </b> - <em> colabore com a gente </em> </li>
						<li> <b> Comercial </b> - <em> anuncie no Nerd Ignorante </em> </li>
						<li> <b> Bug Report </b> - <em> bug ou problema do site </em> </li>
					</ul>

					<form id="emailForm">
						<div class="form-group">
							<label for="emailFrom">Seu e-mail</label>
							<input type="email" class="form-control" id="emailFrom" aria-describedby="emailHelp" pattern="^([\w-.]){3,}@\w{3,}.\w{2,}(.[\w\D]{2,})?$" placeholder="seu-email@seu-provedor.com">
							<small id="emailHelp" class="form-text text-muted">Seu email está seguro, não iremos divulgá-lo sem sua permisssão.</small>
						</div>
						<div class="form-group">
							<label for="emailTo">Escolha um tópico</label>
							<select class="form-control" id="emailTo" disabled="true">
								<option>NI Talk</option>
								<option>Parceria</option>
								<option>Comercial</option>
								<option>Bug Report</option>
							</select>
						</div>
						<div class="form-group">
							<label for="emailSubject">Assunto</label>
							<input type="text" class="form-control" id="emailSubject" aria-describedby="subjectHelp" placeholder="Ex: NITalk 1 - Nerd Cool, Nerd Boring" disabled="true">
							<small id="subjectHelp" class="form-text text-muted"> Indique o episódio. </small>
						</div>
						<div class="form-group">
							<label for="emailBody">Mensagem</label>
							<textarea name="emailbody" id="emailBody" class="form-control" aria-describedby="bodyHelp" cols="30" rows="10" maxlength="2600"></textarea>
							<small id="bodyHelp" class="form-text text-muted"> Somente texto simples, sem links ou imagens. </small>
						</div>

						<button type="button" id="btnSendEmail" class="btn bg-highlight"> Enviar </button>
						<span class="emailUrgentMessage"></span>
					</form>
				</div>
			</div>
			<div class="footer">
				<div id="emailResponse" class="hide">
					<h1>Email Response</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function( $ ) {
		$('#emailTo').on('change', function(){
			var emailTo = $('#emailTo option:selected').html()
			console.log(emailTo);
			if (emailTo === 'NI Talk') {
				$('#subjectHelp').html('Indique o episódio.');
				$('#emailSubject')[0].placeholder = 'Ex: NITalk 1 - Nerd Cool, Nerd Boring';
			}
			else if (emailTo === 'Parceria') {
				$('#subjectHelp').html('Diga como gostaria de contribuir.');
				$('#emailSubject')[0].placeholder = 'Ex: Escrevo artigos de (Notícias, Games, RPG etc) ou Proposta de Parceria';

			}
			else if (emailTo === 'Comercial') {
				$('#subjectHelp').html('Diga qual empresa representa ou site');
				$('#emailSubject')[0].placeholder = 'Ex: EmpresaOndeTrabalho.com';
			}
			else if (emailTo === 'Bug Report') {
				$('#subjectHelp').html('Indique a página onde ocorre o erro.');
				$('#emailSubject')[0].placeholder = 'Ex: Erro na URL http://nerdignorante.com.br/contato/';
			}
		});

		$('#btnSendEmail').on('click', function(){ // Valida se o email é valido
			debugger;

			if ($('#emailBody').val().length < 3) {
				alert('Digite um texto que expresse que você quer dizer. \r\n 3 caracteres é o minimo para tanto');
			}
			else if ($('#emailSubject').val().length < 3) {
				alert('Digite um Assunto que resuma bem o assunto. \r\n 3 caracteres é o minimo para tanto');
			}
			else {
				//alert('email será enviado');
				verificar_sessao();
			}

			
		});



		$('#emailFrom').on('blur', function(e){
			if (e.currentTarget.value.search(/^([\w-.]){3,}@\w{3,}.\w{2,}(.[\w\D]{2,})?$/) < 0) {
				$('#emailHelp').html('Utilize um email válido: Ex: usuario@provedor.com');
				$('#emailTo').attr('disabled', true);
				$('#emailSubject').attr('disabled', true);
				$('#emailbody').attr('disabled', true);
			}
			else {
				$('#emailHelp').html('Seu email está seguro, não iremos divulgá-lo sem sua permisssão.');
				$('#emailTo').attr('disabled', false);
				$('#emailSubject').attr('disabled', false);
				$('#emailbody').attr('disabled', false);
			}
		});


		function verificar_sessao(){
		    data = {
		    	from : $('#emailFrom').val()
		    	, destination : $('#emailTo option:selected').html()
		    	, subject : $('#emailSubject').val()
		    	, body : $('#emailBody').val()
		    }
		    debugger;
		    var getUrl = window.location;
			var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];
			var bUrl = '';
			(baseUrl.indexOf('localhost') > 0) ? bUrl = baseUrl + getUrl.pathname.split('/')[1] : bUrl = baseUrl;	
		    
		    $.ajax({   
		    	url: bUrl + 'wp-content/themes/niknights/assets/plugins/phpmailer/emailsender.php'
		    	, type: "post"
		    	, data: data
		    	, success: function (d) {
			    	debugger;
			        if (isJson(d)) {
			                   
			        } else {

			    	}
			    }
			});
		}

		function clearEmailFields() {
			$('#emailFrom').val('');
			$('#emailTo option')[0].selected = true;
			$('#emailTo option').change();
			$('#emailSubject').val('');
			$('#emailBody').val('');
		}

	});

</script>




<?php 
/*
	$encoding = "utf-8";
	$from ='hilderney@gmail.com';

    // Preferences for Subject field
    $subject_preferences = array(
        "input-charset" => $encoding,
        "output-charset" => $encoding,
        "line-length" => 76,
        "line-break-chars" => "\r\n"
    );

	$to = 'hilderney@cadmap.com.br';
	$subject = 'Teste NI';
	$message = 'Ai a mensagem aqui indo embora';
	$header .= 'Content-type: text/html; charset='.$encoding . " \r\n";
	$header = 'From: ' . $from . " \r\n";
	$header .= 'Date: ' . date("r (T)") . " \r\n";
	$header .= iconv_mime_encode('Subject', $subject, $subject_preferences);
	//$header .= . phpversion();

	//var_dump($headers);

	echo '<br/><br/><br/><br/>';

	$sent = mail( $to, $subject, $message, $headers );

	if ($sent) {
		echo '<span>Checar email ' . $to . '.</span>';
	}
	else {
		echo '<span>Não deu!</span>';
	}

