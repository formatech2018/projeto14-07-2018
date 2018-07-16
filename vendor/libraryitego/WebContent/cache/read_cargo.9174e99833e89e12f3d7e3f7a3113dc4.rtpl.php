<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	
	<h1 class="titulo-formulario">Listar Cargos</h1>

	<table class="table">
    <thead>
      <tr>
        <th scope="col">NOME</th>
        <th>AÇÃO</th>
       
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultcargo) && ( is_array($resultcargo) || $resultcargo instanceof Traversable ) && sizeof($resultcargo) ) foreach( $resultcargo as $key1 => $value1 ){ $counter1++; ?>

      <tr>
      
        <td scope="row"><?php echo htmlspecialchars( $value1["nome_cargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td> 
         <td><a href="/crud/funcionario/cargo/<?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/update" class="btn btn-warning botao">Editar</a>
          <a href="/crud/funcionario/cargo/<?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class="btn btn-danger botao">Excluir</a></td>
 
      </tr>
     <?php } ?>

    </tbody>
  </table>
</div>