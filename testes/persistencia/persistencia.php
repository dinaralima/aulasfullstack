<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Teste de persistência de dados</title>
  <body>
  <h2>Teste de formulário com persistência de dados</h2>
  <form action='' method="post">
    <div>
      <label for="nome">Seu nome: </label>
      <input type="text" name="nome" value="<?php if (isset($_POST["nome"])) echo($_POST["nome"]);?>" id="nome">
    </div>
    <div>
      <label for="opcao">Sua opção: </label>
      <select id="opcao" name="opcao">
        <option value="" selected disabled hidden>Escolha</option>
        <option value="1" <?php if (isset($_POST["opcao"]) && $_POST["opcao"] == 1 ) echo "selected"; ?>> Primeira</option>
        <option value="2" <?php if (isset($_POST["opcao"]) && $_POST["opcao"] == 2 ) echo "selected"; ?>>Segunda</option>
        <option value="3" <?php if (isset($_POST["opcao"]) && $_POST["opcao"] == 3 ) echo "selected"; ?>>Terceira</option>
        <option value="4" <?php if (isset($_POST["opcao"]) && $_POST["opcao"] == 4 ) echo "selected"; ?>>Quarta</option>
      </select>
    </div>
    <div>
      <label for="opcoes">Suas opções: <br></label>
      <input type="checkbox" name="opcoes[]" value="bike" <?php echo check("bike"); ?>> I have a bike<br>
      <input type="checkbox" name="opcoes[]" value="car" <?php echo check("car"); ?>> I have a car<br>
      <input type="checkbox" name="opcoes[]" value="boat" <?php echo check("boat"); ?>> I have a boat<br>
    </div>
    <input type="submit" value="Enviar">
  </form>
  <hr>
<?php

function check($opcao){
  if (isset($_POST["opcoes"])){
    foreach ($_POST["opcoes"] as $value) {
       if ($value == $opcao){
          return "checked";
          exit;
        }
     }
  }
}
?>



<!-- // ideia para persistencia de checkbox:
// faça uma função que confira se o valor
dentro de cada elemento da array bate com o value, se sim, retorna o "checked" -->



  </body>
  <html>
