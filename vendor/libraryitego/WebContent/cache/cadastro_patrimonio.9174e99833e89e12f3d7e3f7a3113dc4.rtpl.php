<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h1 class="titulo-formulario"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?> Patrimônios</h1>
<form id="formlivropatrimonio" action="/crud/livro/patrimonio/<?php echo htmlspecialchars( $action, ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">

	<div class="form-row">
		<input type="hidden" name="idlivro" id="idlivro" value="<?php echo htmlspecialchars( $idlivro, ENT_COMPAT, 'UTF-8', FALSE ); ?>">
		 <label for="formGroupExampleInput">Nome do Livro</label>
		<input type="text" class="form-control" id="nome_livro" value="<?php echo htmlspecialchars( $nome_livro, ENT_COMPAT, 'UTF-8', FALSE ); ?>" readonly>
		 <label for="formGroupExampleInput">ISBN</label>
		<input type="text" class="form-control" id="isbn" value="<?php echo htmlspecialchars( $isbn, ENT_COMPAT, 'UTF-8', FALSE ); ?>" readonly>
	</div>
	<div class="form-row">
	    <div class="col col1">
	      <label for="formGroupExampleInput">Patrimônio</label>
	      <input type="number" id="idpatrimonio" name="idpatrimonio" class="form-control" placeholder="Digite o patrimônio do livro" required>
	    </div>
	    
	</div>
	 
		<button class="btn btn-primary botao">Cadastrar</button>
		<a class="btn btn-success botao" href="/crud/livro/search">Pesquisar outro livro</a>
	</form>
	</div>