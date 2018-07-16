<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<h1 class="titulo-formulario">Listar Cursos</h1>
	<table class="table">
    <thead>
      <tr>
        <th scope="col">NOME</th>
        <th scope="col">TIPO</th>
        <th scope="col">CARGA HORÁRIA</th>
        <th scope="col">VAGAS</th>
        <th scope="col">AÇÃO TURMA</th>
        <th scope="col">AÇÃO CURSO</th>
        

      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultcurso) && ( is_array($resultcurso) || $resultcurso instanceof Traversable ) && sizeof($resultcurso) ) foreach( $resultcurso as $key1 => $value1 ){ $counter1++; ?>

      <tr>
      
        <th scope="row"><?php echo htmlspecialchars( $value1["nome_curso"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
        <td><?php echo htmlspecialchars( $value1["nome_tipo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><?php echo htmlspecialchars( $value1["carga_horaria"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td> 
        <td><?php echo htmlspecialchars( $value1["vagas"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><a class="btn btn-primary botao tamanhob" href="/crud/curso/<?php echo htmlspecialchars( $value1["idcurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/turmas/0/10/read">Listar Turma</a>
        <a class="btn btn-primary botao tamanhob" href="/crud/curso/turma/<?php echo htmlspecialchars( $value1["idcurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/insert">Cadastrar Turma</a></td>
       <td><a class="btn btn-warning botao tamanhob" href="/crud/curso/<?php echo htmlspecialchars( $value1["idcurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/update">Editar Curso</a>
        <a class="btn btn-danger botao tamanhob" href="/crud/curso/<?php echo htmlspecialchars( $value1["idcurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete">Excluir Curso</a>
      </td>
           
      </tr>
     <?php } ?>

    </tbody>
  </table>
</div>