<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<h1 class="titulo-formulario">Relatórios do Sistema</h1>
		<div class="row">
    		
    		<div class="col-sm">
					<table>
						<thead>
							<tr>
								<th>Livros</th>
							</tr>
						</thead>
						<tbody>
							<tr><td><a href="/relatorio/livro/quantidade" class="btn btn-info botao tamanhob">Por Quantidade</a></td></tr>
							<tr><td><a href="/relatorio/livro/editora" class="btn btn-info botao tamanhob">Por Editora</a></td></tr>
							<tr><td><a href="/relatorio/livro/area" class="btn btn-info botao tamanhob">Por Área</a></td></tr>
							<tr><td><a href="/relatorio/livro/ano" class="btn btn-info botao tamanhob">Por Ano</a></td></tr>
							<tr><td><a href="/relatorio/livro/patrimonio" class="btn btn-info botao tamanhob">Por Patrimônio</a></td></tr>
							<tr><td><a href="/relatorio/livro/autor" class="btn btn-info botao tamanhob">Por Autor</a></td></tr>
							<tr><td><a href="/relatorio/livro/emprestimo" class="btn btn-info botao tamanhob">Por Empréstimo</a></td></tr>
							<tr><td><a href="/relatorio/avaliacao/livro" class="btn btn-info botao tamanhob">Por Avaliação</a></td></tr>
						</tbody>
					</table>
			</div>

			<div class="col-sm">
					<table>
						<thead>
							<tr>
								<th>Empréstimos</th>
							</tr>
						</thead>
						<tbody>
							<tr><td><a href="/relatorio/emprestimo/quantidade" class="btn btn-info botao tamanhob">Por Quantidade</a></td></tr>
							<tr><td><a href="/relatorio/emprestimo/autorizacao" class="btn btn-info botao tamanhob">Autorização</a></td></tr>
							<tr><td><a href="/relatorio/emprestimo/usuario" class="btn btn-info botao tamanhob">Por Usuário</a></td></tr>
							<tr><td><a href="/relatorio/emprestimo/patrimonio" class="btn btn-info botao tamanhob">Por Patrimônio</a></td></tr>
							
						</tbody>
					</table>
			</div>

			<div class="col-sm">
					<table>
						<thead>
							<tr>
								<th>Usuários</th>
							</tr>
						</thead>
						<tbody>
							<tr><td><a href="/relatorio/usuario/aluno" class="btn btn-info botao tamanhob">Por Aluno</a></td></tr>
							<tr><td><a href="/relatorio/usuario/funcionario" class="btn btn-info botao tamanhob">Por Funcionário</a></td></tr>
						</tbody>
					</table>
			</div>

    		<div class="col-sm">
					<table>
						<thead>
							<tr>
								<th>Turmas</th>
							</tr>
						</thead>
						<tbody>
							<tr><td><a href="/relatorio/turma/quantidade" class="btn btn-info botao tamanhob">Por Quantidade</a></td></tr>
							<tr><td><a href="/relatorio/turma/turno" class="btn btn-info botao tamanhob">Por Turno</a></td></tr>
							<tr><td><a href="/relatorio/turma/curso" class="btn btn-info botao tamanhob">Por Curso</a></td></tr>
							<tr><td><a href="/relatorio/turma/aluno" class="btn btn-info botao tamanhob">Por Aluno</a></td></tr>
							<tr><td><a href="/relatorio/turma/turno/matutino" class="btn btn-info botao tamanhob">Do Turno Matutino</a></td></tr>
							<tr><td><a href="/relatorio/turma/turno/vespertino" class="btn btn-info botao tamanhob">Do Turno Vespertino</a></td></tr>
							<tr><td><a href="/relatorio/turma/turno/noturno" class="btn btn-info botao tamanhob">Do Turno Noturno</a></td></tr>
						</tbody>
					</table>
			</div>
		
			<div class="col-sm">
					<table>
						<thead>
							<tr>
								<th>Cursos</th>
							</tr>
						</thead>
						<tbody>
							<tr><td><a href="/relatorio/curso/quantidade" class="btn btn-info botao tamanhob">Por Quantidade</a></td></tr>
							<tr><td><a href="/relatorio/curso/tipo" class="btn btn-info botao tamanhob">Por Tipo</a></td></tr>
						</tbody>
					</table>
			</div>

			<div class="col-sm">
					<table>
						<thead>
							<tr>
								<th>Funcionários</th>
							</tr>
						</thead>
						<tbody>
							<tr><td><a href="/relatorio/funcionario/quantidade" class="btn btn-info botao tamanhob">Por Quantidade</a></td></tr>
							<tr><td><a href="/relatorio/funcionario/cargo" class="btn btn-info botao tamanhob">Por Cargo</a></td></tr>
							<tr><td><a href="/relatorio/funcionario/formacao" class="btn btn-info botao tamanhob">Por Formação</a></td></tr>
						</tbody>
					</table>
			</div>




		</div>
</div>