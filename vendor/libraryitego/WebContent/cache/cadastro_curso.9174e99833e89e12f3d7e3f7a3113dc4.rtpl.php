<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h1 class="titulo-formulario"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?> Cursos</h1>
<form id="formcurso" action="/crud/curso/<?php echo htmlspecialchars( $action, ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">

	
	<div class="form-row">
	    <div class="col col1">
	      <label for="formGroupExampleInput">Nome do Curso</label>
	      <input type="text" id="nome_curso" name="nome_curso" class="form-control" placeholder="Digite o nome do curso" required>
	    </div>


	    <div class="col-7">
      		<label>Tipo de Curso</label>
          	<select type="text" id="idtipo" name="idtipo" class="form-control" required>
	            <option value="">Escolha o tipo de Curso</option>
	            <?php $counter1=-1;  if( isset($tipo) && ( is_array($tipo) || $tipo instanceof Traversable ) && sizeof($tipo) ) foreach( $tipo as $key1 => $value1 ){ $counter1++; ?>

	              <option value="<?php echo htmlspecialchars( $value1["idtipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_tipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
	            <?php } ?>

          	</select>
    </div>
	</div>
	<div class="form-row">
		<div class="col col1">
	      <label for="formGroupExampleInput">Carga Horária</label>
	      <input type="number" id="carga_horaria" name="carga_horaria" class="form-control" placeholder="Digite a carga horária do curso" required>
	    </div>

	    <div class="col col1">
	      <label for="formGroupExampleInput">Vagas</label>
	      <input type="number" id="vagas" name="vagas" class="form-control" placeholder="Digite o número de vagas referente ao curso" required>
	    </div>
	</div>
	<button type="submit" class="btn btn-primary botao">Enviar</button>
</div>


</form>
