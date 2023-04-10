<?php
// include_once 'salvaQuestionario.php';
include_once 'dadosEgresso.php';

definirDadosSessao();

?>

<form action="salvaQuestionario.php" method="post" name="resposta">

	<h1>Perfil sócio demográfico: caracterização contextual do público pesquisado<br><br></h1>

	<fieldset>
		
		<legend>Dados Pessoais</legend><br>

		<?php echo 'Nome: ' . $_SESSION['nome'] . '<br><br>';?>
		
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

		<div>
			<p>Participou de atividades acadêmicas extracurriculares durante o curso?</p>

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

		<div>
			<p>Durante o curso, você desenvolveu atividade remunerada fora da Universidade?</p>

			<input type="radio" name="AtividadeRemunerada" id="AtividadeRemunerada1" value="Todo o período do curso">
			<label for="AtividadeRemunerada1">Todo o período do curso</label>
			<br>

			<input type="radio" name="AtividadeRemunerada" id="AtividadeRemunerada2" value="Na maior parte do curso">
			<label for="AtividadeRemunerada2">Na maior parte do curso</label>
			<br>
			
			<input type="radio" name="AtividadeRemunerada" id="AtividadeRemunerada3" value="Por pouco tempo na trajetória do curso">
			<label for="AtividadeRemunerada3">Por pouco tempo na trajetória do curso</label>
			<br>

			<input type="radio" name="AtividadeRemunerada" id="AtividadeRemunerada4" value="Não">
			<label for="AtividadeRemunerada4">Não</label>
			<br>
			
		</div>
		<br><br>
		
		<div>
			<p>Curso de Pós-Graduação concluído ou em andamento:</p>

			<select name="cursoPosGraduacao" id="cursoPosGraduacao">
				<option value="Nenhum">Nenhum</option>
				<option value="Aperfeiçoamento">Aperfeiçoamento</option>
				<option value="Especialização">Especialização</option>
				<option value="Mestrado">Mestrado</option>
				<option value="Doutorado">Doutorado</option>
			</select><br>

			<p>Situação do curso:</p>
			
			<input type="radio" name="situacaoCursoPosGraduacao" id="posGraduacaoEmAndamento">
			<label for="posGraduacaoEmAndamento">Em andamento</label>
			<input type="radio" name="situacaoCursoPosGraduacao" id="posGraduacaoConcluida">
			<label for="posGraduacaoConcluida">Concluído</label>

		</div>
		<br><br>



	</fieldset><br>

	<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
		value="Enviar Resposta">
		
</form>
