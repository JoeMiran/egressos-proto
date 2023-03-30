<?php
include_once 'salvaQuestionario.php';
session_start();

echo 'Nome: '.$_SESSION['nome'] . '<br>';

$tempo = new DateTime(date('Y-m-d', time()));
$dataNascimento = new DateTime($_SESSION['dataNascimento']);
echo 'Idade: ' . $tempo->diff($dataNascimento)->format('%y') . '<br>';

echo 'Ano de Ingresso: ' . $_SESSION['anoIngresso'] . '<br>';

echo 'Curso: ' . $_SESSION['curso'] .'<br>';

echo 'Campus: ' . $_SESSION['campus'] .'<br>';

echo 'Email: '.$_SESSION['email'] .'<br>';


echo 'Raça: ';
?>
<form action="salvaQuestionario.php" method="post" name="form">
		<fieldset>
			<label for="cor">Cor/Raça: </label>
			<select id="cor" name="cor">
				<option value="Preto">Preto</option>
				<option value="Branco">Branco</option>
				<option value="Pardo">Pardo</option>
				<option value="Amarelo">Amarelo</option>
				<option value="Indígena">Indígena</option>
				<option value="Não desejo declarar raca/cor">Não desejo declarar raca/cor</option>		
			</select>
			<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
				value="Enviar Questionário">
		</fieldset>
	</form>
