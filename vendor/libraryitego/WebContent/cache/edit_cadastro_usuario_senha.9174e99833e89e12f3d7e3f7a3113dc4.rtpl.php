<?php if(!class_exists('Rain\Tpl')){exit;}?>
  <div id="seguranca">

  <h1 class="container titulo-formulario">Segurança</h1>
  <form id="formusariosenha" method="POST">
    <div class="container">
      <label>Senha atual</label>
      <input type="password" name="senha_antiga" class="form-control" id="senha_antiga" placeholder="Digite sua senha atual ou a última que você lembra">
      <label><a href="/crud/alter/usuario/senha/email">alteração de senha via email</a></label>
    </div>

  <!-- Inserir nova senha -->
  <?php require $this->checkTemplate("edit_cadastro_usuario_senha2");?>
  <div class="container">
    <button type="submit" class="btn btn-primary botao">Enviar</button>
  </div>
  </form>
</div>

