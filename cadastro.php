<?php
print_r($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $_POST[nome] = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
  $_POST[email] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $_POST[senha] = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  $_POST[data_nascimento] = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
  $_POST[telefone] = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
  $_POST[sexo] = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
  $_POST[cor] = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
  $_POST[cor2] = filter_input(INPUT_POST, 'cor2', FILTER_SANITIZE_STRING);
  $_POST[atividade] = $_POST['atividade'];
  $_POST[data_hora] = filter_input(INPUT_POST, 'data-hora', FILTER_SANITIZE_STRING);

  if (empty($_POST[nome]) || empty($_POST[email]) || empty($_POST[senha]) || empty($_POST[data_nascimento]) || empty($_POST[telefone]) || empty($_POST[sexo])) {
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
