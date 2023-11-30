<?php
  GetFormData();
  function GetFormData(){

    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];

    echo "Nome: $nome <br>";
    echo "Email: $email";

    if (empty($nome)) {
      echo "<p style='color:red;'>Erro: O campo Nome não pode estar vazio.</p>";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<p style='color:red;'>Erro: O campo Email deve ser um endereço de email válido.</p>";
  }

  }
?>