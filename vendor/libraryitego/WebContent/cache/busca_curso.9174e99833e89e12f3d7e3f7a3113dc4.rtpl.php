<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h1 class="titulo-formulario">Pesquisar Curso</h1>
<form action="/crud/curso/search" method="POST">
	<div class="row">
	    
		 <div class="col">
		 	<label>Nome do Curso</label>
			<input type="text" id="nome_curso" name="nome_curso" class="form-control" required>
		</div>
		 <div class="col">
		 	 <label>Tipo do Curso</label>
          	<select type="text" id="idtipo" name="idtipo" class="form-control" >
            <option value="">Escolha seu tipo</option>
            <?php $counter1=-1;  if( isset($tipo) && ( is_array($tipo) || $tipo instanceof Traversable ) && sizeof($tipo) ) foreach( $tipo as $key1 => $value1 ){ $counter1++; ?>

              <option value="<?php echo htmlspecialchars( $value1["idtipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_tipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
            <?php } ?>

          </select>
		</div>

	</div>
 	<div>
	 	<button class="btn btn-primary botao">Pesquisar</button>
	 </div>

</form>
</div>