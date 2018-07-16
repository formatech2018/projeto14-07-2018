<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	
	<h1 class="titulo-formulario">Listar Livros</h1>

	<table class="table">
    <thead>
      <tr>
        <th scope="col">ISBN</th>
        <th scope="col">NOME</th>
        <th scope="col">ANO</th>
        <th scope="col">ASSUNTO</th>
        <th scope="col">EDIÇÃO</th>
        <th scope="col">EDITORA</th>
        <th scope="col">ÁREA</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultlivro) && ( is_array($resultlivro) || $resultlivro instanceof Traversable ) && sizeof($resultlivro) ) foreach( $resultlivro as $key1 => $value1 ){ $counter1++; ?>
      <tr>
      
        <th scope="row"><?php echo htmlspecialchars( $value1["isbn"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th> 
        <td><?php echo htmlspecialchars( $value1["nome_livro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><?php echo htmlspecialchars( $value1["ano_livro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><?php echo htmlspecialchars( $value1["assunto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><?php echo htmlspecialchars( $value1["edicao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><?php echo htmlspecialchars( $value1["nome_editora"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><?php echo htmlspecialchars( $value1["nome_area"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>

      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>