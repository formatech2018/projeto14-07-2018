<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h1 class="titulo-formulario"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?> Turmas</h1>
<form id="formturma" action="/crud/curso/turma/<?php echo htmlspecialchars( $action, ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">

	<div class="form-row">
		<input type="hidden" name="idcurso" id="idcurso" value="<?php echo htmlspecialchars( $idcurso, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
		 <label for="formGroupExampleInput">Nome do Curso</label>
		<input type="text" class="form-control" id="nome_curso" value="<?php echo htmlspecialchars( $nome_curso, ENT_COMPAT, 'UTF-8', FALSE ); ?>" readonly>
	</div>
	<div class="form-row">
	    <div class="col col1">
	      <label for="formGroupExampleInput">Data de Inicio</label>
	      <input type="date" id="data_inicio" name="data_inicio" class="form-control" placeholder="Digite a data de início do curso" required>
	    </div>
	    <div class="col col1">
	      <label for="formGroupExampleInput">Previsão de Término</label>
	      <input type="date" id="data_termino" name="data_termino" class="form-control" placeholder="Digite a data de previsão de término do curso" required>
	    </div>
	</div>
	 <div class="form-row">
      <label>Turno</label>
          <select type="text" id="idturno" name="idturno" class="form-control" required>
            <option value="">Escolha o Turno</option>
            <?php $counter1=-1;  if( isset($turno) && ( is_array($turno) || $turno instanceof Traversable ) && sizeof($turno) ) foreach( $turno as $key1 => $value1 ){ $counter1++; ?>

              <option value="<?php echo htmlspecialchars( $value1["idturno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_turno"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
            <?php } ?>

          </select>
  </div> 
		<button class="btn btn-primary botao">Cadastrar</button>
</form>
</div>