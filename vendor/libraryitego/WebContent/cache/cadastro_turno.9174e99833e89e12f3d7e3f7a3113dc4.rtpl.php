<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h1 class="titulo-formulario"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?> Turno</h1>
<form id="formturmaturno" action="/crud/turma/turno/<?php echo htmlspecialchars( $action, ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">

	<div class="form-row">
	    <div class="col col1">
	      <label for="formGroupExampleInput">Nome</label>
	      <input type="text" value="" id="nome_turno" name="nome_turno" class="form-control" placeholder="Digite um Turno" required>
	    
	    </div>
	</div>
	
	<button type="submit" class="btn btn-primary botao">Enviar</button>
</div>


</form>