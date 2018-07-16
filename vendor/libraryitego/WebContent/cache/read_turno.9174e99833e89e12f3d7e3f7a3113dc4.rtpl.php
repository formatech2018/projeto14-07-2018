<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	
	<h1 class="titulo-formulario">Listar Turnos</h1>

	<table class="table">
    <thead>
      <tr>
        <th scope="col">TURNO</th>
        <th>AÇÃO</th>
        <th></th>
       
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultturno) && ( is_array($resultturno) || $resultturno instanceof Traversable ) && sizeof($resultturno) ) foreach( $resultturno as $key1 => $value1 ){ $counter1++; ?>

      <tr>
      
        <td scope="row"><?php echo htmlspecialchars( $value1["nome_turno"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td> 
         <td><a href="/crud/turma/turno/<?php echo htmlspecialchars( $value1["idturno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/update" class="btn btn-warning botao">editar</a>
         <a href="/crud/turma/turno/<?php echo htmlspecialchars( $value1["idturno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class="btn btn-danger botao">excluir</a></td>
 
      </tr>
     <?php } ?>

    </tbody>
  </table>
</div>