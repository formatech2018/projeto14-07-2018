<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<form action="/crud/alter/usuario/senha/email/forget/alter" method="POST">
		<div class="container">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Digite novamente seu email">
		</div>
		<?php require $this->checkTemplate("edit_cadastro_usuario_senha2");?>
		<div class="container">
			<button class="btn btn-primary botao">Enviar</button>
		</div>
	</form>
	
</div>