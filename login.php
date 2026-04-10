<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">@import url("marisaJan.css");</style>
    <style type="text/css">@import url("css/login.css");</style>

    <title>Marisa - Seja bem vindo ao nosso site!</title>
</head>
<body>
    

    <!-- Inicio - Importa Topo -->
    <?php include("includes/topo.php");?>
    <!-- Fim - Importa Topo -->

  <!-- inicio Login -->

    <div class="login">
        <form action="" method="" class="formulario">
        <h3>Faça seu Login</h3>

            <label>Email ou CPF</label>
            <input type="text" name="email" placeholder="Informe E-mail ou CPF" class="inp_login"/>

            <label>Senha*</label>
            <input type="text" name="senha" placeholder="Informe sua senha" class="inp_login" />

            
            <a href=""  class="link_esqueceu">Esqueçeu sua senha?</a>

            <input type="submit" value="Entrar" class="bt_entrar" />

            <b> Ainda não tem um cadastro? <a href=""> Crie sua conta</a></b>

        </form>
    </div>    

  <!-- Fim Login -->


    
    <!-- Inicio - Importa rodape -->
    <?php include("includes/rodape.php");?>
    <!-- Fim - Importa Rodape -->


    