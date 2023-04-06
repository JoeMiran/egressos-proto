<?php

include_once 'dadosEgresso.php';
session_start();

$dados = getDadosEgressoFromDatabase($_SESSION['cpf']);

echo 'CPF: ' . $dados['cpf'] . '<br><br>';

echo 'Nome: ' . $dados['nome'] . '<br><br>';

echo 'Data de Nascimento: ' . $dados['dataNascimento'] . '<br><br>';

echo 'Email: ' . $dados['email'] . '<br><br>';

echo 'Curso: ' . $dados['curso'] . '<br><br>';

echo 'Ano de Ingresso: ' . $dados['anoIngresso'] . '<br><br>';

echo 'Campus: ' . $dados['campus'] . '<br><br>';

echo 'Respostas: <br><br>';

echo 'Genero: ' . $dados['genero'] . '<br><br>';

echo 'Cor: ' . $dados['cor'] . '<br><br>';

echo 'Idade: ' . $dados['idade'] . '<br><br>';

echo 'Obteve bolsa durante o curso? <br>' . $dados['bolsa'] . '<br><br>';

echo 'Se sim, qual(is)? <br>' . $dados['bolsaResumo'] . '<br><br>';

echo 'Participou de atividades acadêmicas extracurriculares durante o curso?<br><br>';

echo 'Iniciação Científica <br>' . $dados['iniciacaoCientifica'] . '<br><br>';


?>