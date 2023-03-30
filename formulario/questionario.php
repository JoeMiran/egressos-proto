<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Questionário do Egresso</title>
</head>
<body>
<?php
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
$host= 'localhost';
$bd= 'egressos';
$senhabd= '';
$userbd = 'root';
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome = $_POST ["nome"]; //atribuição do campo "nome" vindo do formulário para variavel
$cpf = $_POST ["cpf"]; //atribuição do campo "cpf" vindo do formulário para variavel
$email = $_POST ["email"]; //atribuição do campo "email" vindo do formulário para variavel
//Gravando no banco de dados !
//conectando com o localhost - mysql
$conexao = new mysqli($host,$userbd, $senhabd, $db);
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysqli_error());
//conectando com a tabela do banco de dados
$banco = mysqli_($bd,$conexao);
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());
$query = "INSERT INTO `egresso` ( `nome` , `cpf` , `email` , `id` )
VALUES ('$nome', '$cpf', '$email', '')";
mysql_query($query,$conexao);
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?>
</body>
</html>