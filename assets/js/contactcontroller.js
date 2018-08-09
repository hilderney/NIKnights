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

	$('#btnSendEmail').on('click', function(){
		debugger;
		if ($('#emailBody').val().length < 3) {
			msg('<b> Digite uma Mensagem que expresse algo de relevante. </b> <br/> 3 caracteres é o minimo para tanto');
		}
		else if ($('#emailSubject').val().length < 3) {
			msg('<b> Digite um Assunto que resuma bem o que quer dizer. </b> <br/> 3 caracteres é o minimo para tanto');
		}
		else {
			verificar_sessao();
		}			
	});


	$('#emailFrom').on('blur', function(e){
		if (e.currentTarget.value.search(/^([\w-.]){3,}@\w{3,}.\w{2,}(.[\w\D]{2,})?$/) < 0) {
			$('#emailHelp').html('Utilize um email válido: Ex: usuario@provedor.com');
			msg('<b> Utilize um email válido </b> <br/> Ex: usuario@provedor.com', 'danger');
		}
		else {
			$('#emailHelp').html('Seu email está seguro, não iremos divulgá-lo sem sua permisssão.');
			msg('email ' + $('#emailFrom').val() + ' válido', 'info');
		}
		if ($('#emailFrom').val().indexOf('@nerdignorante') > 0) {
			msg('<b> Esta funcionalidade do site não aceita emails internos do grupo Nerd Ignorante. </b> <br/> Favor digitar seu email de contato', 'danger');	
		}
	});

	function verificar_sessao(){
		data = {
			from : $('#emailFrom').val()
			, sector : $('#emailTo option:selected').html()
			, subject : $('#emailSubject').val()
			, body : $('#emailBody').val()
		}

		var getUrl = window.location;
		var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];
		var bUrl = '';
		(baseUrl.indexOf('nerdignorante.com.br') < 0) ? bUrl = baseUrl + getUrl.pathname.split('/')[1] + '/' : bUrl = baseUrl;	

		$.ajax({   
			url: bUrl + 'wp-content/themes/niknights/assets/config/emailsender.php'
			, type: "post"
			, data: data
			, success: function (d) {
				console.log(d);
				msg('<b> Email enviado com sucesso! </b> <br/> Obrigado por contribuir.', 'info');
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