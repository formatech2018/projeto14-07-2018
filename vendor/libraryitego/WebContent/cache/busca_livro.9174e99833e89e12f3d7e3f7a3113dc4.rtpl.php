<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<h1 class="titulo-formulario">Pesquisar livro</h1>
<form action="/crud/livro/search" method="POST">
	<div class="row">
	    
		 <div class="col">
		 	<label>Nome do Livro</label>
			<input type="text" id="nome_livro" name="nome_livro" class="form-control">
		</div>
		 <div class="col">
		 	 <label>ISBN</label>
		 	 <input type="text" id="isbn" name="isbn" class="form-control">
		</div>

	</div>
 	<div>
	 	<button class="btn btn-primary botao">Pesquisar</button>
	 </div>

</form>
</div>