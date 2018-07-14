<?php if(!class_exists('Rain\Tpl')){exit;}?><link rel="stylesheet" type="text/css" href="/vendor/libraryitego/WebContent/view/bootstrap/css/cadastro.css">

<form id="formcadastro" action="/crud/usuario/<?php echo htmlspecialchars( $action, ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">



<div class="container">
  <h1 class="titulo-formulario container"><?php echo htmlspecialchars( $title, ENT_COMPAT, 'UTF-8', FALSE ); ?> Usuário</h1>
  <div id="tipo-remove">

  <h1 class="container titulo-formulario">Tipo de Cadastro</h1>

  <div class="form-row">
    <div class="col">
      <label for="formGroupExampleInput" class="container">Tipo</label>
      <select class="form-control col-7 select-tipo" value="" name="tipo_usuario" id="tipo" required>
       <option value="">Escolha o tipo de Usuário</option>
       <option value="aluno" name="aluno">Aluno</option>
        <option value="funcionario" name="funcionario">Funcionário</option>
      </select>
    </div>
   </div>
 </div>


  <h1 class="container titulo-formulario">Dados Pessoais</h1>


  <div class="container">
  <div class="form-row">
    <div class="col col1">
      <label for="formGroupExampleInput">Nome</label>
      <input type="text" id="nome_usuario" name="nome_usuario" class="form-control" placeholder="Digite o seu nome" required>
    </div>
    <div class="col col1">
      <label for="formGroupExampleInput">CPF</label>
      <input type="text" id="cpf" name="cpf" class="form-control cpf" placeholder="000.000.000-00" required>
    </div>
    <div class="col col1">
      <label for="formGroupExampleInput">Data de Nascimento</label>
      <input type="text" id="dtnasc" name="dtnasc" class="form-control dtnasc" placeholder="DD/MM/AAAA" required>
    </div>
  </div>
  </div>
  <div class="container">
  <div class="form-row">
    <div class="col col2">
      <label for="formGroupExampleInput">Telefone Celular</label>
      <input type="text" id="telefone_celular" name="telefone_celular" class="form-control celular" placeholder="(99) 9 9999-9999" required>
    </div>
    <div class="col col2">
      <label for="formGroupExampleInput">Telefone Fixo</label>
      <input type="text" id="telefone_fixo" name="telefone_fixo" class="form-control fixo" placeholder="(99) 9999-9999" required>
    </div>
    <div class="col col2">
      <label for="formGroupExampleInput">Email</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="email@example.com" required>
    </div>
  </div>
  </div>

  <div id="campos-funcionario">
  <h1 class="container titulo-formulario">Dados Funcionário</h1>

  <div class="container" >
  <div class="form-row">
    <div class="col">
      <label>Formação</label>
          <select type="text" id="idformacao" name="idformacao" class="form-control" >
            <option value="">Escolha sua formação</option>
            <?php $counter1=-1;  if( isset($formacao) && ( is_array($formacao) || $formacao instanceof Traversable ) && sizeof($formacao) ) foreach( $formacao as $key1 => $value1 ){ $counter1++; ?>

              <option value="<?php echo htmlspecialchars( $value1["idformacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_formacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
            <?php } ?>

          </select>
    </div>
    <div class="col">
      <label>Cargo</label>
          <select type="text" id="idcargo" name="idcargo" class="form-control" >
            <option value="">Escolha seu cargo</option>
            <?php $counter1=-1;  if( isset($cargo) && ( is_array($cargo) || $cargo instanceof Traversable ) && sizeof($cargo) ) foreach( $cargo as $key1 => $value1 ){ $counter1++; ?>

              <option value="<?php echo htmlspecialchars( $value1["idcargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_cargo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
            <?php } ?>

          </select>
  </div> 
  </div>
  </div>
  </div>
  


<h1 class="container titulo-formulario">Endereço</h1>

  <div class="container">
  <div class="form-row">
    <div class="col">
      <label for="formGroupExampleInput">Cep</label>
      <input type="text" name="cep" id="cep" class="form-control cep" placeholder="00.000-000">
    </div>
    <div class="col">
      <label for="inputEmail4">Rua</label>
      <input type="text" name="rua" id="rua" class="form-control"  placeholder="Digite o nome da rua">
    </div>
    <div class="col">
      <label for="formGroupExampleInput">Complemento</label>
      <input type="text" id="complemento" name="complemento" class="form-control"  placeholder="Quadra,Lote, etc.">
    </div>
    <div class="col">
      <label for="formGroupExampleInput">Número</label>
      <input type="number" id="numero" name="numero" class="form-control">
    </div>
  </div>
  </div>
  <div class="container">
  <div class="form-row">
    <div class="col">
      <label for="inputEmail4">Bairro</label>
      <input type="text" name="bairro" id="bairro" class="form-control"  placeholder="Digite o nome do bairro">
    </div>
    <div class="col">
      <label for="formGroupExampleInput">Cidade</label>
      <input type="text" name="cidade" id="cidade" class="form-control">
    </div>
    <div class="col">
      <label for="inputState">Estado</label>
      <select id="estado" class="form-control" name="estado">
        <option selected value="">Escolha...</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espirito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>

      </select>
    </div>
  </div>
  </div>

  <div id="seguranca">

  <h1 class="container titulo-formulario">Segurança</h1>

  <div class="container">
  <div class="form-row">
    <div class="col">
      <label>Senha</label>
      <input type="password" id="senha_usuario" name="senha_usuario" class="form-control" id="senha_usuario" placeholder="Digite sua senha" required>
       <div id="progresso" >
        <div id="nivel_senha"></div>
    </div>
    </div>
    <div class="col">
      <label>Confirme sua senha</label>
      <input type="password" id="senha_confirma" name="senha_confirma" class="form-control" id="senha_confirma"  placeholder="Confirme sua senha" required>
    </div>
    <div id="info_senha"></div>
  </div>
  </div>

  <div id="progress" >
  <div id="nivel_senha"></div>
  </div>

  <div class="alert alert-danger" role="alert" id="alerta">
  A senha deve ter no minimo 8 caracteres e deve conter letras e números!
  </div>
</div>

  <div class="container">
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
       Confirmo todas as informações aqui digitadas
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
  </div>

  <div class="divv">
    
  </div>

  
</form>

