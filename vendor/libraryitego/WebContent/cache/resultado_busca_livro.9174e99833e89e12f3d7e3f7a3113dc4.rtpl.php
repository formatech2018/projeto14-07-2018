<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">NOME DO LIVRO</th>
        <th scope="col">ISBN</th>
        <th scope="col">SELECIONAR</th>
      </tr>
    </thead>
    <tbody>
        <?php $counter1=-1;  if( isset($resultlivro) && ( is_array($resultlivro) || $resultlivro instanceof Traversable ) && sizeof($resultlivro) ) foreach( $resultlivro as $key1 => $value1 ){ $counter1++; ?>
      <tr>
      
        <th scope="row"><?php echo htmlspecialchars( $value1["nome_livro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th> 
        <td><?php echo htmlspecialchars( $value1["isbn"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
        <td><a href="/crud/livro/patrimonio/<?php echo htmlspecialchars( $value1["idlivro"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/insert" class="btn btn-primary botao">Cadastrar Patrimônio</a></td>
        
        
      </tr>
     <?php } ?>
    </tbody>
  </table>
</div>