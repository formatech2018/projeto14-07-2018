<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	
	<h1 class="titulo-formulario">Listar Patrimônios</h1>

	<table class="table">
    <thead>
      <tr>
        <th scope="col">NÚMERO</th>
        <th scope="col">NOME</th>
        <th scope="col">AÇÃO</th>
       
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultpatrimonio) && ( is_array($resultpatrimonio) || $resultpatrimonio instanceof Traversable ) && sizeof($resultpatrimonio) ) foreach( $resultpatrimonio as $key1 => $value1 ){ $counter1++; ?>

      <tr>
      
        <th scope="row"><?php echo htmlspecialchars( $value1["idpatrimonio"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th> 
        <td><?php echo htmlspecialchars( $value1["nome_livro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><a href="/crud/livro/patrimonio/<?php echo htmlspecialchars( $value1["idpatrimonio"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/update" class="btn btn-warning botao">Editar</a>
        <a href="/crud/livro/patrimonio/<?php echo htmlspecialchars( $value1["idpatrimonio"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class="btn btn-danger botao">Excluir</a></td>
 
      </tr>
     <?php } ?>

    </tbody>
  </table>
</div>