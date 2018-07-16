<?php if(!class_exists('Rain\Tpl')){exit;}?><link rel="stylesheet" type="text/css" href="/vendor/libraryitego/WebContent/view/bootstrap/css/cadastro.css">

<form id="formlivro" action="/crud/livro/<?php echo htmlspecialchars( $action, ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">



<div class="container">

  <h1 class="container titulo-formulario"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?> Livro</h1>

  <div class="container">
  <div class="form-row">
    <div class="col col1">
      <label for="formGroupExampleInput">ISBN</label>
      <input type="text" id="isbn" name="isbn" class="form-control" placeholder="Digite o ISBN do livro" required>
    </div>
    <div class="col col1">
      <label for="formGroupExampleInput">Nome do Livro</label>
      <input type="text" id="nome_livro" name="nome_livro" class="form-control" placeholder="Digite o nome do livro" required>
    </div>
    <div class="col col1">
      <label for="formGroupExampleInput">Ano</label>
      <input type="number" id="ano_livro" name="ano_livro" class="form-control" placeholder="Digite o ano de publicação do livro" required>
    </div>
  </div>
  </div>
  <div class="container">
  <div class="form-row">
    <div class="col col2">
      <label for="formGroupExampleInput">Assunto</label>
      <input type="text" id="assunto" name="assunto" class="form-control" placeholder="Digite o assunto do livro" required>
    </div>
    <div class="col col2">
      <label for="formGroupExampleInput">Edição</label>
      <input type="text" id="edicao" name="edicao" class="form-control" placeholder="Digite a Edição do livro" required>
    </div>
  </div>
  </div>
  <div class="container" >
  <div class="form-row">
    <div class="col">
      <label>Editora</label>
          <select type="text" id="ideditora" name="ideditora" class="form-control" >
            <option value="">Escolha a editora do livro</option>
            <?php $counter1=-1;  if( isset($editora) && ( is_array($editora) || $editora instanceof Traversable ) && sizeof($editora) ) foreach( $editora as $key1 => $value1 ){ $counter1++; ?>

              <option value="<?php echo htmlspecialchars( $value1["ideditora"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_editora"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
            <?php } ?>

          </select>
          <small class="form-text text-muted">Caso não encontre a editora ou ainda não existem editoras cadastradas <a href="/crud/livro/editora/insert">clique aqui</a> e cadastre.</small>
    </div>
    <div class="col">
      <label>Área</label>
          <select type="text" id="idarea" name="idarea" class="form-control" >
            <option value="">Escolha a área do livro</option>
            <?php $counter1=-1;  if( isset($area) && ( is_array($area) || $area instanceof Traversable ) && sizeof($area) ) foreach( $area as $key1 => $value1 ){ $counter1++; ?>

              <option value="<?php echo htmlspecialchars( $value1["idarea"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_area"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
            <?php } ?>

          </select>
         <small class="form-text text-muted"> Caso não encontre a área ou ainda não existem áreas cadastradas <a href="/crud/livro/area/insert">clique aqui</a> e cadastre.</small>
  </div> 
   
  </div>
   <button type="submit" class="btn btn-primary botao">Continuar</button>
</div>

</form>
