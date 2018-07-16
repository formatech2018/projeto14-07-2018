<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	
	<h1 class="titulo-formulario">Listar Áreas</h1>

	<table class="table">
    <thead>
      <tr>
        <th scope="col">NOME</th>
        <th>AÇÃO</th>
        
       
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultarea) && ( is_array($resultarea) || $resultarea instanceof Traversable ) && sizeof($resultarea) ) foreach( $resultarea as $key1 => $value1 ){ $counter1++; ?>

      <tr>
      
        <td scope="row"><?php echo htmlspecialchars( $value1["nome_area"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td> 
         <td><a href="/crud/livro/area/<?php echo htmlspecialchars( $value1["idarea"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/update" class="btn btn-warning botao">editar</a>
           <a href="/crud/livro/area/<?php echo htmlspecialchars( $value1["idarea"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class="btn btn-danger botao">Excluir</a></td>
      </tr>
     <?php } ?>

    </tbody>
  </table>
</div>