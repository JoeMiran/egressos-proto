<?php

include_once 'dadosEgresso.php';
session_start();

$dados = getDadosEgressoFromDatabase($_SESSION['cpf']);

echo 'Respostas: <br><br>';

echo 'Nome: ' . $dados['nome'] . '<br><br>';

echo 'Idade: ' . $dados['idade'] . '<br><br>';

echo 'Ano de Ingresso: ' . $dados['anoIngresso'] . '<br><br>';

echo 'Curso: ' . $dados['curso'] . '<br><br>';

echo 'Campus: ' . $dados['campus'] . '<br><br>';

echo 'Email: ' . $dados['email'] . '<br><br>';

echo 'Genero: ' . $dados['genero'] . '<br><br>';

echo 'Cor: ' . $dados['cor'] . '<br><br>';

?>