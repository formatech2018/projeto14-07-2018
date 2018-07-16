<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<a href="/crud/livro/0/10/read" class="btn btn-success">Voltar para lista de livros</a>
  <a href="/crud/livro/<?php echo htmlspecialchars( $idlivro, ENT_COMPAT, 'UTF-8', FALSE ); ?>/autor/insert" class="btn btn-primary">Cadastrar Autores</a>
	<h1 class="titulo-formulario">Listar Autores do livro <?php echo htmlspecialchars( $nome_livro, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
	<table class="table">
    <thead>
      <tr>
        <th scope="col">NOME</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultautor) && ( is_array($resultautor) || $resultautor instanceof Traversable ) && sizeof($resultautor) ) foreach( $resultautor as $key1 => $value1 ){ $counter1++; ?>

      <tr>
      
        <td scope="row"><?php echo htmlspecialchars( $value1["nome_autor"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td> 
       <td><a href="/crud/livro/<?php echo htmlspecialchars( $value1["idlivro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/autores/<?php echo htmlspecialchars( $value1["idautor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class="btn btn-danger botao">Excluir</a></td>
        
        
      </tr>
     <?php } ?>

    </tbody>
  </table>
</div>