<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">NOME DO CURSO</th>
        <th scope="col">TIPO DO CURSO</th>
        <th scope="col">SELECIONAR</th>
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultcurso) && ( is_array($resultcurso) || $resultcurso instanceof Traversable ) && sizeof($resultcurso) ) foreach( $resultcurso as $key1 => $value1 ){ $counter1++; ?>

      <tr>
      
        <th scope="row"><?php echo htmlspecialchars( $value1["nome_curso"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th> 
        <td><?php echo htmlspecialchars( $value1["nome_tipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><a href="/crud/curso/turma/<?php echo htmlspecialchars( $value1["idcurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/insert" class="btn btn-primary botao">Cadastrar Turma</a></td>
        
        
      </tr>
     <?php } ?>

    </tbody>
  </table>
</div>