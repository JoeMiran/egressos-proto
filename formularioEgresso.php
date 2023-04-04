<?php
include_once 'salvaQuestionario.php';

$tempo = new DateTime(date('Y-m-d', time()));
$dataNascimento = new DateTime($_SESSION['dataNascimento']);
$idade = $tempo->diff($dataNascimento)->format('%y');

echo 'Perfil sócio demográfico: caracterização contextual do público pesquisado<br><br>';

echo 'DADOS PESSOAIS<br><br>';

echo 'Nome: '.$_SESSION['nome'] . '<br>'.'<br>';

echo 'Idade: ' . $idade . ' anos<br>'.'<br>';

echo 'Ano de Ingresso: ' . $_SESSION['anoIngresso'] . '<br>'.'<br>';

echo 'Curso: ' . $_SESSION['curso'] .'<br>'.'<br>';

echo 'Campus: ' . $_SESSION['campus'] .'<br>'.'<br>';

echo 'Email: '.$_SESSION['email'] .'<br>'.'<br>';

?>
<form action="salvaQuestionario.php" method="post" name="form">
		
			<label for="genero">Gênero: </label>
			<select id="genero" name="genero">
				<option value="Masculino">Masculino</option>
				<option value="Feminino">Feminino</option>
				<option value="Outro">Outro</option>	
			</select><br><br>
			<input type="hidden" id="idade" name="idade" value="<?= $idade; ?>">
			<label for="cor">Cor/Raça: </label>
			<select id="cor" name="cor">
				<option value="Preto">Preto</option>
				<option value="Branco">Branco</option>
				<option value="Pardo">Pardo</option>
				<option value="Amarelo">Amarelo</option>
				<option value="Indígena">Indígena</option>
				<option value="Não desejo declarar raca/cor">Não desejo declarar raca/cor</option>		
			</select><br><br>
			<label for="bolsa1">Obteve bolsa durante o curso?</label>
			<select id="bolsa1" name="bolsa1">
				<option value="Sim">Sim</option>
				<option value="Não">Não</option>		
			</select><br><br>
			<label for="bolsa2">Se sim, qual(is)? </label>
			<input type="text" id="bolsa2" name="bolsa2"><br><br>
			DADOS COMPLEMENTARES<br><br>
<!-- 			<label for="atvExtra">Participação em atividades acadêmicas extracurriculares durante o curso</label> -->
<!-- 			<div> -->
<!-- 				<input type=checkbox id="atvExtra" name="atvExtra"> -->
<!-- 					<option value="Iniciação Científica">Iniciação Científica</option> -->
<!-- 					<option value="Monitoria">Monitoria</option> -->
<!-- 					<option value="Estágio Não Obrigatório pertinente ao curso">Estágio Não Obrigatório pertinente ao curso</option> -->
<!-- 					<option value="Atividade Curricular em Comunidade - ACC">Atividade Curricular em Comunidade - ACC</option> -->
<!-- 					<option value="Eventos: Congressos, Seminários, etc">Eventos: Congressos, Seminários, etc</option> -->
<!-- 					<option value="Empresa Júnior">Empresa Júnior</option> -->
<!-- 					<option value="Diretório Acadêmico">Diretório Acadêmico</option> -->
<!-- 					<option value="Outras">Outras</option> -->
<!-- 			<br><br> -->
			<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
				value="Enviar Questionário">
		
	</form>
