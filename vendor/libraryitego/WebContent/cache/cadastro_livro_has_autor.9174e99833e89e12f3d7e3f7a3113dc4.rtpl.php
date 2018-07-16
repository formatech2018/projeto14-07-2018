<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<form id="formlivrohasautor" method="post" action="/crud/livro/autores/<?php echo htmlspecialchars( $action, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
	
			<input type="hidden" name="idlivro" value="<?php echo htmlspecialchars( $idlivro, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
		

	<div class="form-row">
    	<div class="col">
			<select name="idautor" class="form-control" required >
				<option value="">selecione o autor</option>
				<?php $counter1=-1;  if( isset($autor) && ( is_array($autor) || $autor instanceof Traversable ) && sizeof($autor) ) foreach( $autor as $key1 => $value1 ){ $counter1++; ?>

				 <option value="<?php echo htmlspecialchars( $value1["idautor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_autor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
		            <?php } ?>

			</select>
		</div>
	</div>
	<div class="form-row">
    	<div class="col">
			<button type="submit" class="btn btn-primary botao">Enviar</button>
		</div>
	</div>
</form>
</div>