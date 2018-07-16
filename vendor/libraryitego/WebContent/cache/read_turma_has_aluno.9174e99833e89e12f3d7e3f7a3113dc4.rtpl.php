<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
  <h1 class="titulo-formulario">Listar Matrículas</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">MATRÍCULA</th>
        <th>CÓDIGO</th>
        <th>ALUNO</th>
        <th>TURMA</th>
        <th>TURMAS POR ALUNO</th>
        <th>AÇÃO</th>
       
        
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultturmahasaluno) && ( is_array($resultturmahasaluno) || $resultturmahasaluno instanceof Traversable ) && sizeof($resultturmahasaluno) ) foreach( $resultturmahasaluno as $key1 => $value1 ){ $counter1++; ?>
        <tr>
            <td scope="row"><?php echo htmlspecialchars( $value1["matricula"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["idturma"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
            <td><?php echo htmlspecialchars( $value1["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
             <td><a href="/crud/turma/<?php echo htmlspecialchars( $value1["idturma"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/matriculas/0/10/read" class="btn btn-success botao tamanhob">Alunos</a>
            <td><a href="/crud/aluno/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/matriculas/0/10/read" class="btn btn-success botao tamanhob">Turmas do Aluno(a)<br> <?php echo htmlspecialchars( $value1["nome_usuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
             <td><a href="/crud/turma/aluno/<?php echo htmlspecialchars( $value1["matricula"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/matricula/update" class="btn btn-warning botao tamanhob-matricula">Editar Matricula</a>
             <a href="/crud/turma/aluno/<?php echo htmlspecialchars( $value1["matricula"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/matricula/delete" class="btn btn-danger botao tamanhob-matricula">Excluir Matricula</a></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
 