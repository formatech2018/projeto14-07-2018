<?php if(!class_exists('Rain\Tpl')){exit;}?> <div class="container">
  <div class="form-row">
    <div class="col">
      <label>Nova Senha</label>
      <input type="password" id="senha_usuario" name="senha_usuario" class="form-control" id="senha_usuario" placeholder="Digite sua senha" required>
       <div id="progresso" >
        <div id="nivel_senha"></div>
    </div>
    </div>
    <div class="col">
      <label>Confirme sua nova senha</label>
      <input type="password" id="senha_confirma" name="senha_confirma" class="form-control" id="senha_confirma"  placeholder="Confirme sua senha" required>

    </div>
    <div id="info_senha"></div>
  </div>
  </div>

  <div id="progress" >
  <div id="nivel_senha"></div>
  </div>

  <div class="alert alert-danger container" role="alert" id="alerta">
  A senha deve ter no minimo 8 caracteres e deve conter letras e números!
  </div>