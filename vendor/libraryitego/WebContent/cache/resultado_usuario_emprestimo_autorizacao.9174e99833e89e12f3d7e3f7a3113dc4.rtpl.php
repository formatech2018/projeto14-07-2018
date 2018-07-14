<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<table class="table">
		<h1 class="titulo-formulario">Empréstimos do Usuário <?php echo htmlspecialchars( $nome_usuario, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
			<thead>
				<tr>
					 
					 <th scope="col">LIVRO</th>
					 <th scope="col">PATRIMÔNIO</th>
					 <th scope="col">DATA DO EMPRÉSTIMO</th>
					 <th scope="col">DATA DA DEVOLUÇÃO</th>
					 <th scope="col">AUTORIZAÇÃO</th>


				</tr>
			</thead>
			<tbody>
				<?php $counter1=-1;  if( isset($result) && ( is_array($result) || $result instanceof Traversable ) && sizeof($result) ) foreach( $result as $key1 => $value1 ){ $counter1++; ?>
				<tr>
					
					<td><?php echo htmlspecialchars( $value1["nome_livro"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["idpatrimonio"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["data_emprestimo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["data_devolucao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><a class='btn btn-primary botao' href="/relatorio/autorizacao/emprestimo/<?php echo htmlspecialchars( $value1["idusuario"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/<?php echo htmlspecialchars( $value1["idemprestimo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Mostrar Autorização</a></td>

				</tr>
				<?php } ?>
			</tbody>
		
		
		</table>

</div>