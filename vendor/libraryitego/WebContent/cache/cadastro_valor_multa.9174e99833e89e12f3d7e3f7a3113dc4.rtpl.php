<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h1 class="titulo-formulario">Cadastro do Valor Diário da Multa</h1>
<form id="formvalormulta" action="/crud/multa/valor/insert" method="POST">

	
	<div class="form-row">
	    <div class="col col1">
	      <label for="formGroupExampleInput">Valor Diário da Multa</label>
	      <input type="text" id="valor_diario_multa" name="valor_diario_multa" class="form-control" placeholder="Digite o valor diário da multa" required>
	    
	    </div>
	</div>
	
	<button type="submit" class="btn btn-primary botao">Enviar</button>
</div>


</form>