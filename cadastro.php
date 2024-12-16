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
  echo "Nome:" $_POST[nome]<br>;
  echo "E-mail:" $_POST[email]<br>;
  echo "Senha:" $_POST[senha]<br>;
  echo "Data de Nascimento:" $_POST[data_nascimento]<br>;
  echo "Telefone:" $_POST[telefone]<br>;
  echo "Sexo:" $_POST[sexo]<br>;
  echo "Cor:" $_POST[cor]<br>;
  echo "Atividade: " . implode(", ", $_POST[atividade]) . "<br>";
  echo "Data e Hora:" $_POST[data_hora]<br>;
} else {
  echo "Nenhum dado recebido.";
}

?>
