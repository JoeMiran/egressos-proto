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
	</fieldset><br>
	
	<fieldset>
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

	<fieldset>

		<a>Em caso de Curso PÃ³s-GraduaÃ§Ã£o, realizado ou andamento, Ã© na UFPA?</a>
		<select id="localPos" name="localPos">
				<option>Selecione</option>
				<option value="sim">Sim</option>
				<option value="nao">NÃ£o</option>
		</select><br><br>

	</fieldset><br>

	<fieldset>

		<legend>SituaÃ§Ã£o Profissional Atual</legend>
		<label for="mercado">Atualmente estÃ¡ inserido/a no mercado de trabalho?</label>
		<select id="mercado" name="mercado">
			<option>Selecione</option>
			<option value="sim">Sim</option>
			<option value="nao">NÃ£o</option>
		</select><br><br>
		<a>Se estÃ¡, qual a forma de obtenÃ§Ã£o de emprego?</a><br>
		<input type="checkbox" id="consurso" name="concurso">
		<label for="concurso">Consurso</label><br>
		<input type="checkbox" id="ctps" name="ctps">
		<label for="ctps">CTPS</label><br>
		<input type="checkbox" id="autonomo" name="autonomo">
		<label for="autonomo">AutÃ´nomo</label><br>
		<input type="checkbox" id="informal" name="informal">
		<label for="informal">Atividade informal</label><br>

	</fieldset><br>

	<fieldset>

		<a>Tempo necessário para conseguir atividade remunerada após a formatura:</a>
		<div>
			<input type=radio id="poucotempoMercado" name="tempoMercado">
			<label for="poucotempoMercado">0 a 6 meses</label><br>
			<input type=radio id="mediotempoMercado" name="tempoMercado">
			<label for="mediotempoMercado">7 a 12 meses</label><br>
			<input type=radio id="maiortempoMercado" name="tempoMercado">
			<label for="maiortempoMercado">mais de 12 meses</label><br>
		</div>

	</fieldset><br>

	<fieldset>
		
		<a>Seu trabalho é na sua área de formação?</a>
		<select id="saida" name="saida">
			<option>Selecione</option>
			<option value="sim">Sim</option>
			<option value="nao">Não</option>
		</select>

	</fieldset><br>

	<fieldset>
		
		<a>Faixa salarial:</a>
		<div>
			<input type=radio id="baixoSalario" name="salario">
			<label for="baixoSalario">1 a 2 salários mínimos</label><br>
			<input type=radio id="medioSalario" name="salario">
			<label for="medioSalario">3 a 5 salários mínimos</label><br>
			<input type=radio id="altoSalario" name="salario">
			<label for="altoSalario">mais de 5 salários</label><br>
		</div>

	</fieldset><br>

	<fieldset>

		<legend>Atividade Laboral</legend>

		<a>Há uma relação entre o curso de graduação concluido e a atividade laboral que está exercendo?</a><br>
		<div>
			<input type="radio" id="simTrabalho" name="formacaoTrabalho">
			<label>Sim</label><br>
			<input type="radio" id="naoTrabalho" name="formacaoTrabalho">
			<label>Não</label>
		</div><br>

		<a>Recebeu orientação, no âmbito do seu respectivo curso, para atuar no mercado de trabalho?</a><br>
		<div>
			<input type="radio" id="comOrientacao" name="orientacao">
			<label for="comOrientacao">Sim</label><br>
			<input type="radio" id="naoTrabalho" name="orientacao">
			<label for="semOrientacao">Não</label>
		</div><br>

		<a>As temáticas e/ou assuntos abordados nas várias disciplinas cursadas tiveram utilidade para o exercício profissional?</a>
		<div>
			<input type="radio" id="util" name="utilidade">
			<label for="util">Sim</label><br>
			<input type="radio" id="inutil" name="utilidade">
			<label for="inutil">Não</label>
		</div><br>

		<a>O(s) estágio(s) que cumpriu no curso contribuiu para a inserção profissional no mercado de trabalho?</a>
		<div>
			<input type="radio" id="contribuiu" name="contribuicao">
			<label for="contribuiu">Sim</label><br>
			<input type="radio" id="naoContribuiu" name="contribuicao">
			<label for="naoContribuiu">Não</label><br>
			<input type="radio" id="indiferente" name="contribuicao">
			<label for="indiferente">Não fiz estágio</label>
		</div><br>

		<label>Comente:</label><br>
		<textarea placeholder="Descreva mais um pouco como anda sua situação profissional..."></textarea><br>

	</fieldset><br>

	<fieldset>

		<legend>Nível de Satisfação</legend>

		<a>Em relação à satisfação com seu curso, você está?</a>
		<div>
			<input type="radio" id="muitoSatisfeito" name="satisfacao">
			<label for="muitoSatisfeito">Muito Satisfeito</label><br>
			<input type="radio" id="satisfeito" name="satisfacao">
			<label for="satisfeito">Satisfeito</label><br>
			<input type="radio" id="insatisfeito" name="satisfacao">
			<label for="insatisfeito">Insatisfeito</label>
		</div><br>

	</fieldset>



	<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
		value="Enviar Resposta">
		
</form>
