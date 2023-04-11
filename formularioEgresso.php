<?php
// include_once 'salvaQuestionario.php';
include_once 'dadosEgresso.php';

definirDadosSessao();

?>

<form action="salvaQuestionario.php" method="post" name="resposta">

	<h1>Perfil sócio demográfico: caracterização contextual do público 
		pesquisado<br><br></h1>

	<fieldset>
		<!-- --------------------------------------------------------------- -->
		<legend>Dados Pessoais</legend><br>

		<?php echo 'Nome: ' . $_SESSION['nome'];?><br><br>
		
		<?php echo 'Email: '.$_SESSION['email'];?><br><br>
		
		<?php echo 'Idade: ' . $_SESSION['idade'] . ' anos';?><br><br>

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
		<!-- --------------------------------------------------------------- -->
	</fieldset><br>

	<fieldset>
		<!-- --------------------------------------------------------------- -->
		<legend>Sobre sua formação na Universidade</legend><br>

		<?php echo 'Curso: ' . $_SESSION['curso'];?><br><br>
		
		<?php echo 'Campus: ' . $_SESSION['campus'];?><br><br>

		<?php echo 'Ano de Ingresso: ' . $_SESSION['anoIngresso'];?><br><br>
		
		<?php echo 'Ano de Conclusão: '// . $_SESSION['anoConclusao'];
		?><br><br>

		<p>Obteve bolsa durante o curso?</p>
		
		<input type="radio" name="bolsa" id="bolsa1">
		<label for="bolsa1">Sim</label><br>
		<input type="radio" name="bolsa" id="bolsa2">
		<label for="bolsa2">Não</label><br>

		<p>Se sim, qual(is)?</p>

		<textarea name="resumoBolsa" cols=40 rows=6 
		placeholder="Descreva mais sobre a bolsa"
		></textarea><br><br>
		<!-- --------------------------------------------------------------- -->
	</fieldset><br>
	
	<fieldset>
	
		<legend>Dados Complementares</legend>
		<!-- --------------------------------------------------------------- -->
		<p>Participou de atividades acadêmicas extracurriculares durante o 
			curso?</p>

		<input type=checkbox id="iniciacaoCientifica" name="iniciacaoCientifica"
		 value="">
		<label for="iniciacaoCientifica">Iniciação Científica</label><br>

		<input type=checkbox id="monitoria" name="monitoria">
		<label for="monitoria">Monitoria</label><br>

		<input type=checkbox id="estagioNaoObrigatorio" 
		name="estagioNaoObrigatorio">
		<label for="estagioNaoObrigatorio">Estágio Não Obrigatório pertinente ao
			 curso</label><br>

		<input type=checkbox id="atividadeComunidade" 
		name="atividadeComunidade">
		<label for="atividadeComunidade">Atividade Curricular em Comunidade - 
			ACC</label><br>

		<input type=checkbox id="eventos" name="eventos">
		<label for="eventos">Eventos: Congressos, Seminários, etc</label><br>

		<input type=checkbox id="empresaJunior" name="empresaJunior">
		<label for="empresaJunior">Empresa Júnior</label><br>

		<input type=checkbox id="diretorioAcademico" name="diretorioAcademico">
		<label for="diretorioAcademico">Diretório Acadêmico</label><br>

		<input type=checkbox id="outrasAtividades" name="outrasAtividades">
		<label for="outrasAtividades">Outras</label><br>

		<p>Durante o curso, você desenvolveu atividade remunerada fora da 
			Universidade?</p>
	
		<input type="radio" name="atividadeRemunerada" id="atividadeRemunerada1"
		 value="Todo o período do curso">
		<label for="atividadeRemunerada1">Todo o período do curso</label><br>
	
		<input type="radio" name="atividadeRemunerada" id="atividadeRemunerada2"
		 value="Na maior parte do curso">
		<label for="atividadeRemunerada2">Na maior parte do curso</label><br>
				
		<input type="radio" name="atividadeRemunerada" id="atividadeRemunerada3"
		 value="Por pouco tempo na trajetória do curso">
		<label for="atividadeRemunerada3">Por pouco tempo na trajetória do 
			curso</label><br>
	
		<input type="radio" name="atividadeRemunerada" id="atividadeRemunerada4"
		 value="Não">
		<label for="atividadeRemunerada4">Não</label><br>

		<p>Curso de Pós-Graduação concluído ou em andamento:</p>
	
		<select name="cursoPosGraduacao" id="cursoPosGraduacao">
			<option value="Nenhum">Nenhum</option>
			<option value="Aperfeiçoamento">Aperfeiçoamento</option>
			<option value="Especialização">Especialização</option>
			<option value="Mestrado">Mestrado</option>
			<option value="Doutorado">Doutorado</option>
		</select><br>
	
		<p>Situação do curso:</p>
				
		<input type="radio" name="situacaoCursoPosGraduacao" 
		id="posGraduacaoEmAndamento">
		<label for="posGraduacaoEmAndamento">Em andamento</label><br>
		<input type="radio" name="situacaoCursoPosGraduacao" 
		id="posGraduacaoConcluida">
		<label for="posGraduacaoConcluida">Concluído</label><br>
	
		<p>Em caso de Curso Pós-Graduação, realizado ou andamento, é na 
			UFPA?</p>

		<input type="radio" name="posGraduacaoUfpa" id="posGraduacaoUfpa1" 
		value="Sim">
		<label for="">Sim</label><br>
		<input type="radio" name="posGraduacaoUfpa" id="posGraduacaoUfpa2" 
		value="Não">
		<label for="">Não</label><br><br>
		<!-- --------------------------------------------------------------- -->
	</fieldset><br>

	<fieldset>
		<!-- --------------------------------------------------------------- -->
		<legend>Situação Profissional Atual</legend>

		<p>Atualmente estão inserido/a no mercado de trabalho?</p>

		<input type="radio" name="inseridoNoMercado" id="inseridoNoMercado1" 
		value="Sim">
		<label for="">Sim</label><br>
		<input type="radio" name="inseridoNoMercado" id="inseridoNoMercado2" 
		value="Não">
		<label for="">Não</label><br>

		<p>Se estão, qual a forma de obtenção de emprego?</p>

		<input type="checkbox" id="concursado" name="concursado">
		<label for="concursado">Concursado</label><br>
		<input type="checkbox" id="profissionalFormal" 
		name="profissionalFormal">
		<label for="profissionalFormal">Profissional formal</label><br>
		<input type="checkbox" id="profissionalAutonomo" 
		name="profissionalAutonomo">
		<label for="profissionalAutonomo">Profissional autônomo</label><br>
		<input type="checkbox" id="profissionalInformal" 
		name="profissionalInformal">
		<label for="profissionalInformal">Profissional informal</label><br>

		<p>Tempo necessário para conseguir atividade remunerada após a 
			formatura:</p>
		
		<input type=radio id="tempoFormaturaEmprego1" 
		name="tempoFormaturaEmprego" value="0 a 6 meses">
		<label for="tempoFormaturaEmprego1">0 a 6 meses</label><br>
		<input type=radio id="tempoFormaturaEmprego2" 
		name="tempoFormaturaEmprego" value="7 a 12 meses">
		<label for="tempoFormaturaEmprego2">7 a 12 meses</label><br>
		<input type=radio id="tempoFormaturaEmprego3" 
		name="tempoFormaturaEmprego" value="mais de 12 meses">
		<label for="tempoFormaturaEmprego3">mais de 12 meses</label><br>
	
		<p>Seu trabalho é na sua área de formação?</p>
		
		<input type="radio" name="trabalhaNaAreaDeFormacao" 
		id="trabalhaNaAreaDeFormacao1" value="Sim">
		<label for="">Sim</label><br>
		<input type="radio" name="trabalhaNaAreaDeFormacao" 
		id="trabalhaNaAreaDeFormacao2" value="Não">
		<label for="">Não</label><br>
	
		<p>Faixa salarial:</p>
		
		<input type=radio id="faixaSalarial1" name="faixaSalarial" 
		value="1 a 2 salários mínimos">
		<label for="faixaSalarial1">1 a 2 salários mínimos</label><br>
		<input type=radio id="faixaSalarial2" name="faixaSalarial" 
		value="3 a 5 salários mínimos">
		<label for="faixaSalarial2">3 a 5 salários mínimos</label><br>
		<input type=radio id="faixaSalarial3" name="faixaSalarial" 
		value="mais de 5 salários">
		<label for="faixaSalarial3">mais de 5 salários</label><br><br>
		<!-- --------------------------------------------------------------- -->
	</fieldset><br>

	<fieldset>

		<legend>Atividade Laboral</legend>
		<!-- --------------------------------------------------------------- -->

		<p>Há uma relação entre o curso de graduação concluido e a atividade 
			laboral que está exercendo?</p>
		
		<input type="radio" id="relacaoCursoTrabalho1" 
		name="relacaoCursoTrabalho" value="Sim">
		<label>Sim</label><br>
		<input type="radio" id="relacaoCursoTrabalho2" 
		name="relacaoCursoTrabalho" value="Não">
		<label>Não</label><br>

		<p>Recebeu orientação, no âmbito do seu respectivo curso, para atuar no 
			mercado de trabalho?</p>
		
		<input type="radio" id="recebeuOrientacao1" name="recebeuOrientacao" 
		value="Sim">
		<label for="recebeuOrientacao1">Sim</label><br>
		<input type="radio" id="recebeuOrientacao2" name="recebeuOrientacao" 
		value="Não">
		<label for="recebeuOrientacao2">Não</label><br>

		<p>As temáticas e/ou assuntos abordados nas várias disciplinas cursadas 
			tiveram utilidade para o exercício profissional?</p>
		
		<input type="radio" id="disciplinasForamUteis1" 
		name="disciplinasForamUteis" value="Sim">
		<label for="disciplinasForamUteis1">Sim</label><br>
		<input type="radio" id="disciplinasForamUteis2" 
		name="disciplinasForamUteis" value="Não">
		<label for="disciplinasForamUteis2">Não</label><br>

		<p>O(s) estágio(s) que cumpriu no curso contribuiu para a inserção 
			profissional no mercado de trabalho?</p>
		
		<input type="radio" id="estagioContribuiuEmprego1" 
		name="estagioContribuiuEmprego" value="Sim">
		<label for="estagioContribuiuEmprego1">Sim</label><br>
		<input type="radio" id="estagioContribuiuEmprego2" 
		name="estagioContribuiuEmprego" value="Não">
		<label for="estagioContribuiuEmprego2">Não</label><br>
		<input type="radio" id="estagioContribuiuEmprego3" 
		name="estagioContribuiuEmprego" value="Não fiz estágio">
		<label for="estagioContribuiuEmprego3">Não fiz estágio</label><br>

		<p>Comente:</p>

		<textarea name="resumoSituacaoProfissional" cols=40 rows=6 
		placeholder="Descreva mais sobre sua situação profissional"
		></textarea><br><br>
		<!-- --------------------------------------------------------------- -->
	</fieldset><br>

	<fieldset>
		
		<legend>Nível de Satisfação</legend>
		<!-- --------------------------------------------------------------- -->
		<p>Em relação à satisfação com seu curso, você está?</p>

		<input type="radio" id="satisfacaoComCurso1" name="satisfacaoComCurso" 
		value="Muito Satisfeito">
		<label for="satisfacaoComCurso1">Muito Satisfeito</label><br>
		<input type="radio" id="satisfacaoComCurso2" name="satisfacaoComCurso" 
		value="Satisfeito">
		<label for="satisfacaoComCurso2">Satisfeito</label><br>
		<input type="radio" id="satisfacaoComCurso3" name="satisfacaoComCurso" 
		value="Insatisfeito">
		<label for="satisfacaoComCurso3">Insatisfeito</label><br><br>
		<!-- --------------------------------------------------------------- -->
	</fieldset><br>

	<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
		value="Enviar Resposta">
		
</form>
