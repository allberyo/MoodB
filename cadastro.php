<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

echo "Cadastro realizado com sucesso!<br><br>";
echo "Nome: $nome<br>";
echo "E-mail: $email<br>";
echo "Senha: $senha<br>";
echo "Data de Nascimento: $data_nascimento<br>";
echo "CPF: $cpf<br>";
echo "Telefone: $telefone<br>";
echo "Endereço: $endereco<br>";
echo "Cidade: $cidade<br>";
echo "Estado: $estado<br>";
echo "CEP: $cep<br>";
?>