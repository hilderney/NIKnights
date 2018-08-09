<div id="contact-section">
	<div class="sub-title hide">
		<h2 class="cl-light"> Contato </h2>
	</div>
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
					<select class="form-control" id="emailTo" >
						<option>NI Talk</option>
						<option>Parceria</option>
						<option>Comercial</option>
						<option>Bug Report</option>
					</select>
				</div>
				<div class="form-group">
					<label for="emailSubject">Assunto</label>
					<input type="text" class="form-control" id="emailSubject" aria-describedby="subjectHelp" placeholder="Ex: NITalk 1 - Nerd Cool, Nerd Boring">
					<small id="subjectHelp" class="form-text text-muted"> Indique o episódio. </small>
				</div>
				<div class="form-group">
					<label for="emailBody">Mensagem</label>
					<textarea name="emailbody" id="emailBody" class="form-control" aria-describedby="bodyHelp" cols="30" rows="10" maxlength="5000"></textarea>
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
<script type="text/javascript" src="<?php  bloginfo('template_url'); ?>/assets/js/contactcontroller.min.js"></script>