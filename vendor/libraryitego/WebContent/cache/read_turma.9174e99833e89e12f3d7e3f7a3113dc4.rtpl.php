<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
  <a href="/crud/curso/0/10/read" class="btn btn-success">Voltar para lista de cursos</a>
  <h1 class="titulo-formulario"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
  <table class="table">
    <thead>
      <tr>
        <th>CÓDIGO</th>
        <th scope="col">INICIO</th>
        <th>TÉRMINO</th>
        <th>TURNO</th>
        <th>AÇÃO</th>
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultturma) && ( is_array($resultturma) || $resultturma instanceof Traversable ) && sizeof($resultturma) ) foreach( $resultturma as $key1 => $value1 ){ $counter1++; ?>

      <tr>
      <td><?php echo htmlspecialchars( $value1["idturma"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td scope="row"><?php echo htmlspecialchars( $value1["data_inicio"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><?php echo htmlspecialchars( $value1["data_termino"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>  
        <td><?php echo htmlspecialchars( $value1["nome_turno"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><a href="/crud/curso/<?php echo htmlspecialchars( $value1["idturma"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/turma/update" class="btn btn-warning botao">Editar</a>
         <a href="/crud/curso/turma/<?php echo htmlspecialchars( $value1["idturma"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class="btn btn-danger botao">Excluir</a></td>
        
      </tr>
     <?php } ?>

    </tbody>
  </table>
</div>