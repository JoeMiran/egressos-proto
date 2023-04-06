<?php
// include_once 'salvaQuestionario.php';
include_once 'dadosEgresso.php';

definirDadosSessao();

?>

<form action="salvaQuestionario.php" method="post" name="resposta">

	<h1>Perfil sócio demográfico: caracterização contextual do público pesquisado<br><br></h1>

	<fieldset>
		
		<legend>Dados Pessoais</legend><br>

		<?php echo 'Nome: '.$_SESSION['nome'] . '<br><br>';?>
		
		<?php echo 'Curso: ' . $_SESSION['curso'] .'<br><br>';?>
		
		<?php echo 'Campus: ' . $_SESSION['campus'] .'<br><br>';?>
		
		<?php echo 'Ano de Ingresso: ' . $_SESSION['anoIngresso'] . '<br><br>';?>
		
		<?php // echo 'Ano de Conclusão: ' . $_SESSION['anoConclusao'] . '<br><br>';?>
		
		<?php echo 'Email: '.$_SESSION['email'] .'<br><br>';?>
		
		<?php echo 'Idade: ' . $_SESSION['idade'] . ' anos<br><br>';?>

		<label for="genero">Gênero: </label>
		<select id="genero" name="genero">
			<option value="Masculino">Masculino</option>
			<option value="Feminino">Feminino</option>
			<option value="Outro">Outro</option>	
		</select><br><br>
			
		<label for="cor">Cor/Raça: </label>
		<select id="cor" name="cor">
			<option value="Preto">Preto</option>
			<option value="Branco">Branco</option>
			<option value="Pardo">Pardo</option>
			<option value="Amarelo">Amarelo</option>
			<option value="Indigena">Indígena</option>
			<option value="Não declarada">Não desejo declarar raca/cor</option>		
		</select><br><br>

	</fieldset><br>

	<fieldset>

		<legend>Sobre sua formação na Universidade</legend><br>

		<label for="bolsa">Obteve bolsa durante o curso?</label>
		<select id="bolsa" name="bolsa">
			<option value="Sim">Sim</option>
			<option value="Não">Não</option>
		</select><br><br>
		<label for="bolsaResumo">Se sim, qual(is)? </label>
		<input type="text" id="bolsaResumo" name="bolsaResumo"><br><br>
		
	</fieldset><br>
	
	<fieldset>
		
		<legend>Dados Complementares</legend><br>

		<a>Participou de atividades acadêmicas extracurriculares durante o curso?</a>
		<div>
			<input type=checkbox id="iniciacaoCientifica" name="iniciacaoCientifica" value="">
			<label for="iniciacaoCientifica">Iniciação Científica</label><br>

			<input type=checkbox id="monitoria" name="monitoria">
			<label for="monitoria">Monitoria</label><br>

			<input type=checkbox id="estagioNaoObrigatorio" name="estagioNaoObrigatorio">
			<label for="estagioNaoObrigatorio">Estágio Não Obrigatório pertinente ao curso</label><br>

			<input type=checkbox id="atividadeComunidade" name="atividadeComunidade">
			<label for="atividadeComunidade">Atividade Curricular em Comunidade - ACC</label><br>

			<input type=checkbox id="eventos" name="eventos">
			<label for="eventos">Eventos: Congressos, Seminários, etc</label><br>

			<input type=checkbox id="empresaJunior" name="empresaJunior">
			<label for="empresaJunior">Empresa Júnior</label><br>

			<input type=checkbox id="diretorioAcademico" name="diretorioAcademico">
			<label for="diretorioAcademico">Diretório Acadêmico</label><br>

			<input type=checkbox id="outrasAtividades" name="outrasAtividades">
			<label for="outrasAtividades">Outras</label><br>
		</div>
		<br><br>

	</fieldset><br>

	<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
		value="Enviar Resposta">
		
</form>
