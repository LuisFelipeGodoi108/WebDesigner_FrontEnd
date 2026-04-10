<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">@import url("marisaJan.css");</style>
    <style type="text/css">@import url("css/cadastro.css");</style>

    <title>Marisa - Cadastro</title>
</head>
<body>
    

    <!-- Inicio - Importa Topo -->
    <?php include("includes/topo.php");?>
    <!-- Fim - Importa Topo -->

  <!-- inicio cadastro -->

    

<div class="container">

  <h2>Quer se cadastrar?</h2>
  <p>Por favor preencha os campos abaixo, vai ser rapidinho</p>

  <!-- TIPO PESSOA -->
  <div class="tipo-pessoa">
    <label class="radio">
      <input type="radio" name="tipo" checked>
      <span></span>
      Pessoa Física
    </label>

    <label class="radio">
      <input type="radio" name="tipo">
      <span></span>
      Pessoa Jurídica
    </label>
  </div>

  <div class="form-grid">

    <!-- ESQUERDA -->
    <div class="col">

      <label>Nome completo*</label>
      <input type="text" placeholder="Informe seu nome">

      <div class="row">
        <div>
          <label>Data de nascimento*</label>
          <input type="text" id="data" placeholder="00/00/0000">
        </div>

        <div>
          <label>CPF*</label>
          <input type="text" id="cpf" placeholder="000.000.000-00">
        </div>
      </div>

      <label>Gênero*</label>
      <div class="radio-group">

        <label class="radio">
          <input type="radio" name="genero" checked>
          <span></span>
          Feminino
        </label>

        <label class="radio">
          <input type="radio" name="genero">
          <span></span>
          Masculino
        </label>

        <label class="radio">
          <input type="radio" name="genero">
          <span></span>
          Não informar
        </label>

      </div>

      <div class="row">
        <div>
          <label>DDD*</label>
          <input type="text" id="ddd1" placeholder="(00)">
        </div>

        <div>
          <label>Celular*</label>
          <input type="text" id="celular" placeholder="00000-0000">
        </div>

        <div>
          <label>DDD</label>
          <input type="text" id="ddd2" placeholder="(00)">
        </div>

        <div>
          <label>Telefone</label>
          <input type="text" id="telefone" placeholder="0000-0000">
        </div>
      </div>

    </div>

    <!-- DIREITA -->
    <div class="col">

      <label>E-mail*</label>
      <input type="email" placeholder="Informe o e-mail">

      <button class="btn">RECEBER TOKEN DE CADASTRO</button>
      <small>O token será enviado por e-mail/SMS*</small>

      <label>Token*</label>
      <input type="text" placeholder="Informe o token">

      <label>Senha*</label>
      <div class="input-icon">
        <input type="password" id="senha" placeholder="Insira a senha">
        <i class="fa-solid fa-eye" onclick="toggleSenha('senha', this)"></i>
      </div>

      <label>Confirmar Senha*</label>
      <div class="input-icon">
        <input type="password" id="confirmar" placeholder="Confirme a senha">
        <i class="fa-solid fa-eye" onclick="toggleSenha('confirmar', this)"></i>
      </div>

    </div>

  </div>

  <!-- TERMOS -->
  <div class="termos">
    <input type="checkbox">
    <p>
      Li, compreendi e concordo com as 
      <a href="#">Condições Gerais</a>, inclusive quanto à proteção de dados pessoais,
      e com a <a href="#">Política de Privacidade</a>.
    </p>
  </div>

  <button class="btn-final">FINALIZAR CADASTRO</button>

</div>

<script src="script.js"></script>

</body>
</html>


  <!-- Fim cadastro -->


    
    <!-- Inicio - Importa rodape -->
    <?php include("includes/rodape.php");?>
    <!-- Fim - Importa Rodape -->


    