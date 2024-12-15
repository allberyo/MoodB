<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  $data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
  $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
  $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
  $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
  $cor2 = filter_input(INPUT_POST, 'cor2', FILTER_SANITIZE_STRING);
  $atividade = $_POST['atividade'];
  $data_hora = filter_input(INPUT_POST, 'data-hora', FILTER_SANITIZE_STRING);

  if (empty($nome) || empty($email) || empty($senha) || empty($data_nascimento) || empty($telefone) || empty($sexo)) {
    echo "Preencha todos os campos obrigatórios!";
    exit;
  }

  echo "Dados recebidos:<br>";
  echo "Nome: $nome<br>";
  echo "E-mail: $email<br>";
  echo "Senha: $senha<br>";
  echo "Data de Nascimento: $data_nascimento<br>";
  echo "Telefone: $telefone<br>";
  echo "Sexo: $sexo<br>";
  echo "Cor: $cor<br>";
  echo "Atividade: " . implode(", ", $atividade) . "<br>";
  echo "Data e Hora: $data_hora<br>";
} else {
  echo "Nenhum dado recebido.";
}

?>
