<?php
include_once 'dadosEgresso.php';
definirDadosSessao();
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Formulário - Egressos</title>
	</head>

	<header>
		<div id="navbar">
			<div class="resp">
				<h1>
					<strong>Pesquisa de Egressos da UFPA</strong>
				</h1>
			</div>
		</div>

		<div id="barra">
			<a href="https://egressos.ufpa.br/">
				<img class="logo" src="images/logo_ufpa.png">
			</a>
			<button class="return" type="button"><strong><a style="font-size: larger;" class="link"
						href="validaCpf.php">🢀</a></strong></button>
			</a>
		</div>
		
	</header>

	<body>
					
		<div id="area-principal">
			<!-- <form onsubmit="return validaFormulario()" action="salvaQuestionario.php" method="post" name="resposta"> -->
			<form action="salvaQuestionario.php" method="post" name="resposta">

				<!-- <h3>Perfil sócio demográfico: caracterização contextual do público pesquisado</h3> -->

				<fieldset>
					<!-- --------------------------------------------------------------- -->
					<legend><strong>DADOS PESSOAIS</strong></legend>
					<div class="dados">
						<p>Nome: <span><?php echo $_SESSION['nome'];?></span></p>
						<p>Email: <span><?php echo $_SESSION['email'];?></span></p>
						<p>Idade: <span><?php echo $_SESSION['idade'];?></span></p>
					</div>
					<!-- --------------------------------------------------------------- -->
					<div class="pergunta">
						<div>
							<label style="font-size: larger;">Gênero: </label>
							<select id="genero" name="genero">
								<option>Selecione</option>
								<option value="Masculino">Masculino</option>
								<option value="Feminino">Feminino</option>
								<option value="Outro">Outro</option>
							</select>
						</div>
					</div>
						
					<div class="pergunta">
						<div>
						<label style="font-size: larger; max-width: cal(100% - 98px);">Etnia/Cor: </label>
							<select id="cor" name="cor">
								<option>Selecione</option>
								<option value="Preto">Preto</option>
								<option value="Branco">Branco</option>
								<option value="Pardo">Pardo</option>
								<option value="Amarelo">Amarelo</option>
								<option value="Indigena">Indígena</option>
								<option value="Não declarada">Outro</option>
							</select>
						</div>
					</div>
					<!-- --------------------------------------------------------------- -->
				</fieldset>

				<fieldset>
					<!-- --------------------------------------------------------------- -->
					<legend><strong>FORMAÇÃO</strong></legend>
					<div class="dados">
						<p>Curso: <span><?php echo $_SESSION['curso'];?></span></p>
						<p>Campus: <span><?php echo $_SESSION['campus'];?></span></p>
						<p>Ano de Ingresso: <span><?php echo $_SESSION['anoIngresso'];?></span></p>
					</div>
					
					<!-- --------------------------------------------------------------- -->
					<div class="pergunta">
						<p>Obteve bolsa durante o curso?</p>
						<div class="radio">
							<input type="radio" name="bolsa" id="bolsa1" value="Sim">
							<label for="bolsa1" onclick="obteveBolsa('sim')">Sim</label><br>
							<input type="radio" onclick="naoObteveBolsa('nao')" name="bolsa" id="bolsa2" value="Não">
							<label for="bolsa2">Não</label><br>
						</div>
					</div>

					<div class="pergunta">
						<p>Se sim, qual(is)?</p>
						<div>
							<textarea name="resumoBolsa" cols=40 rows=6
							placeholder="Descreva mais sobre a bolsa"
							></textarea>
						</div>
					</div>
					<!-- --------------------------------------------------------------- -->
				</fieldset>
				
				<fieldset>
				
					<legend><strong>DADOS COMPLEMENTARES</strong></legend>
					<!-- --------------------------------------------------------------- -->
					<div class="pergunta">
						<p>Participou de atividades acadêmicas extracurriculares durante o
							curso?</p>
						<div class="checkbox">
							<input type=checkbox id="iniciacaoCientifica" name="iniciacaoCientifica">
							<label for="iniciacaoCientifica">Iniciação Científica</label><br>
							<input type=checkbox id="monitoria" name="monitoria">
							<label for="monitoria">Monitoria</label><br>
							<input type=checkbox id="estagioNaoObrigatorio" name="estagioNaoObrigatorio">
							<label for="estagioNaoObrigatorio">Estágio Não Obrigatório pertinente ao curso</label><br>
							<input type=checkbox id="atividadeComunidade" name="atividadeComunidade">
							<label for="atividadeComunidade">Atividade Curricular em Comunidade - ACC</label><br>
							<input type=checkbox id="participouDeEventos" name="participouDeEventos">
							<label for="participouDeEventos">Eventos: Congressos, Seminários, etc</label><br>
							<input type=checkbox id="empresaJunior" name="empresaJunior">
							<label for="empresaJunior">Empresa Júnior</label><br>
							<input type=checkbox id="diretorioAcademico" name="diretorioAcademico">
							<label for="diretorioAcademico">Diretório Acadêmico</label><br>
							<input type=checkbox id="outrasAtividades" name="outrasAtividades">
							<label for="outrasAtividades">Outras Atividades</label><br>
						</div>
					</div>

					<div class="pergunta">
						<p>Durante o curso, você desenvolveu atividade remunerada fora da Universidade?</p>
						<div class="radio">
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
						</div>
					</div>

					<div class="pergunta">
						<div>
						<label style="font-size: larger;">Curso de Pós-Graduação:</label>
							<select name="cursoPosGraduacao" id="cursoPosGraduacao">
								<option value="Nenhum">Nenhum</option>
								<option value="Aperfeiçoamento">Aperfeiçoamento</option>
								<option value="Especialização">Especialização</option>
								<option value="Mestrado">Mestrado</option>
								<option value="Doutorado">Doutorado</option>
							</select>
						</div>
					</div>
				
					<div class="pergunta">
						<p>Situação do curso:</p>
						<div class="radio">
							<input type="radio" name="situacaoCursoPosGraduacao"
							id="posGraduacaoEmAndamento" value="Em andamento">
							<label for="posGraduacaoEmAndamento">Em andamento</label><br>
							<input type="radio" name="situacaoCursoPosGraduacao"
							id="posGraduacaoConcluida" value="Concluído">
							<label for="posGraduacaoConcluida">Concluído</label><br>
						</div>
					</div>
				
					<div class="pergunta">
						<p>Em caso de Curso Pós-Graduação, realizado ou andamento, é na
							UFPA?</p>
						<div class="radio">
							<input type="radio" name="posGraduacaoUfpa" id="posGraduacaoUfpa1"
							value="Sim">
							<label for="posGraduacaoUfpa1">Sim</label><br>
							<input type="radio" name="posGraduacaoUfpa" id="posGraduacaoUfpa2"
							value="Não">
							<label for="posGraduacaoUfpa2">Não</label><br>
						</div>
					</div>
					<!-- --------------------------------------------------------------- -->
				</fieldset>

				<fieldset>
					<!-- --------------------------------------------------------------- -->
					<legend><strong>SITUAÇÃO PROFISSIONAL</strong></legend>

					<div class="pergunta">
						<p>Atualmente está inserido/a no mercado de trabalho?</p>
						<div class="radio">
							<input type="radio" onclick="trabalho('sim')" name="inseridoNoMercado" id="inseridoNoMercado1"
							value="Sim">
							<label for="inseridoNoMercado1">Sim</label><br>
							<input type="radio" onclick="trabalho('nao')" name="inseridoNoMercado" id="inseridoNoMercado2"
							value="Não">
							<label for="inseridoNoMercado2">Não</label><br>
						</div>
					</div>
					
					<div id="pergunta1" class="pergunta">
						<p>Qual a modalidade de emprego?</p>
						<div class="radio">
							<input type="radio" id="tipoDeEmprego1" name="tipoDeEmprego" value="Concursado">
							<label for="tipoDeEmprego1">Concursado</label><br>
							<input type="radio" id="tipoDeEmprego2"
							name="tipoDeEmprego" value="Profissional formal">
							<label for="tipoDeEmprego2">Profissional formal</label><br>
							<input type="radio" id="tipoDeEmprego3"
							name="tipoDeEmprego" value="Profissional autônomo">
							<label for="tipoDeEmprego3">Profissional autônomo</label><br>
							<input type="radio" id="tipoDeEmprego4"
							name="tipoDeEmprego" value="Profissional informal">
							<label for="tipoDeEmprego4">Profissional informal</label><br>
						</div>
					</div>
					
					<div id="pergunta2" class="pergunta">
						<p>Tempo necessário para conseguir atividade remunerada após a
							formatura:</p>
						<div class="radio">
							<input type=radio id="tempoFormaturaEmprego1"
							name="tempoFormaturaEmprego" value="0 a 6 meses">
							<label for="tempoFormaturaEmprego1">0 a 6 meses</label><br>
							<input type=radio id="tempoFormaturaEmprego2"
							name="tempoFormaturaEmprego" value="7 a 12 meses">
							<label for="tempoFormaturaEmprego2">7 a 12 meses</label><br>
							<input type=radio id="tempoFormaturaEmprego3"
							name="tempoFormaturaEmprego" value="mais de 12 meses">
							<label for="tempoFormaturaEmprego3">mais de 12 meses</label><br>
						</div>
					</div>
				
					<div class="pergunta">
						<p>Seu trabalho é na sua área de formação?</p>
						<div class="radio">
							<input type="radio" name="trabalhaNaAreaDeFormacao"
							id="trabalhaNaAreaDeFormacao1" value="Sim">
							<label for="trabalhaNaAreaDeFormacao1">Sim</label><br>
							<input type="radio" name="trabalhaNaAreaDeFormacao"
							id="trabalhaNaAreaDeFormacao2" value="Não">
							<label for="trabalhaNaAreaDeFormacao2">Não</label><br>
						</div>
					</div>
				
					<div class="pergunta">
						<p>Faixa salarial:</p>
						<div class="radio">
							<input type=radio id="faixaSalarial1" name="faixaSalarial"
							value="1 a 2 salários mínimos">
							<label for="faixaSalarial1">1 a 2 salários mínimos</label><br>
							<input type=radio id="faixaSalarial2" name="faixaSalarial"
							value="3 a 5 salários mínimos">
							<label for="faixaSalarial2">3 a 5 salários mínimos</label><br>
							<input type=radio id="faixaSalarial3" name="faixaSalarial"
							value="mais de 5 salários">
							<label for="faixaSalarial3">mais de 5 salários</label><br>
						</div>
					</div>

					<div class="pergunta">
						<p>Há uma relação entre o curso de graduação concluido e a atividade
							laboral que está exercendo?</p>
						<div class="radio">
							<input type="radio" id="relacaoCursoTrabalho1"
							name="relacaoCursoTrabalho" value="Sim">
							<label>Sim</label><br>
							<input type="radio" id="relacaoCursoTrabalho2"
							name="relacaoCursoTrabalho" value="Não">
							<label>Não</label><br>
						</div>
					</div>

					<div class="pergunta">
						<p>Recebeu orientação, no âmbito do seu respectivo curso, para atuar no
							mercado de trabalho?</p>
						<div class="radio">
							<input type="radio" id="recebeuOrientacao1" name="recebeuOrientacao"
							value="Sim">
							<label for="recebeuOrientacao1">Sim</label><br>
							<input type="radio" id="recebeuOrientacao2" name="recebeuOrientacao"
							value="Não">
							<label for="recebeuOrientacao2">Não</label><br>
						</div>
					</div>

					<div class="pergunta">
						<p>As temáticas e/ou assuntos abordados nas várias disciplinas cursadas
							tiveram utilidade para o exercício profissional?</p>
						<div class="radio">
							<input type="radio" id="disciplinasForamUteis1"
							name="disciplinasForamUteis" value="Sim">
							<label for="disciplinasForamUteis1">Sim</label><br>
							<input type="radio" id="disciplinasForamUteis2"
							name="disciplinasForamUteis" value="Não">
							<label for="disciplinasForamUteis2">Não</label><br>
						</div>
					</div>

					<div class="pergunta">
						<p>O(s) estágio(s) que cumpriu no curso contribuiu para a inserção
							profissional no mercado de trabalho?</p>
						<div class="radio">
							<input type="radio" id="estagioContribuiuEmprego1"
							name="estagioContribuiuEmprego" value="Sim">
							<label for="estagioContribuiuEmprego1">Sim</label><br>
							<input type="radio" id="estagioContribuiuEmprego2"
							name="estagioContribuiuEmprego" value="Não">
							<label for="estagioContribuiuEmprego2">Não</label><br>
							<input type="radio" id="estagioContribuiuEmprego3"
							name="estagioContribuiuEmprego" value="Não fiz estágio">
							<label for="estagioContribuiuEmprego3">Não fiz estágio</label><br>
						</div>
					</div>

					<p>Comente:</p>

					<textarea name="resumoSituacaoProfissional" cols=40 rows=6 
					placeholder="Descreva mais sobre sua situação profissional"
					></textarea>
					<!-- --------------------------------------------------------------- -->
				</fieldset>

				<fieldset>
					
					<legend><strong>NÍVEL DE SATISFAÇÃO</strong></legend>
					<!-- --------------------------------------------------------------- -->
					<div class="pergunta">
						<p>Em relação à satisfação com seu curso, você está?</p>
						<div class="radio">
							<input type="radio" id="satisfacaoComCurso1" name="satisfacaoComCurso"
							value="Muito Satisfeito">
							<label for="satisfacaoComCurso1">Muito Satisfeito</label><br>
							<input type="radio" id="satisfacaoComCurso2" name="satisfacaoComCurso"
							value="Satisfeito">
							<label for="satisfacaoComCurso2">Satisfeito</label><br>
							<input type="radio" id="satisfacaoComCurso3" name="satisfacaoComCurso"
							value="Insatisfeito">
							<label for="satisfacaoComCurso3">Insatisfeito</label><br>
						</div>
					</div class="pergunta">

					<p>Justifique:</p>

					<textarea name="resumoSatisfacaoComCurso" cols=40 rows=6 
					placeholder="Justifique sua satisfação com o curso"
					></textarea>

					<div class="pergunta">
						<p>Você recomendaria seu curso para outra pessoa?</p>
						<div class="radio">
							<input type="radio" id="recomendaCurso1" name="recomendaCurso"
							value="Sim">
							<label for="recomendaCurso1">Sim</label><br>
							<input type="radio" id="recomendaCurso2" name="recomendaCurso"
							value="Não">
							<label for="recomendaCurso2">Não</label><br>
						</div>
					</div>

					<p>Justifique:</p>
					
					<textarea name="resumoRecomendacaoCurso" cols=40 rows=6 
					placeholder="Justifique a posição da sua recomendação"
					></textarea>
					
					<!-- --------------------------------------------------------------- -->
				</fieldset>

				<fieldset>

					<legend><strong>RELAÇÃO ATUAL COM A UNIVERSIDADE</strong></legend>
					<!-- --------------------------------------------------------------- -->
					<div class="pergunta">
						<p>Participa de eventos acadêmicos da UFPA?</p>
						<div class="radio">
							<input type="radio" id="participaDeEventos1" name="participaDeEventos" value="Sim">
							<label for="participaDeEventos1">Sim</label><br>
							<input type="radio" id="participaDeEventos2" name="participaDeEventos" value="Não">
							<label for="participaDeEventos2">Não</label><br>
						</div>
					</div>

					<p>Caso sim, cite os principais:</p>

					<textarea name="resumoEventosAtuais" cols=40 rows=6 
					placeholder="Cite os eventos aos quais mais participa"
					></textarea>

					<div class="pergunta">
						<p>Participa de grupos de pesquisa e/ou projetos de extensão?</p>
						<div class="radio">
							<input type="radio" id="participaDeProjeto1" name="participaDeProjeto"
							value="Sim">
							<label for="participaDeProjeto1">Sim</label><br>
							<input type="radio" id="participaDeProjeto2" name="participaDeProjeto"
							value="Não">
							<label for="participaDeProjeto2">Não</label><br>
						</div>
					</div>

					<p>Caso sim, cite os principais:</p>

					<textarea name="resumoProjetosAtuais" cols=40 rows=6 
					placeholder="Projetos atuais de extensão e/ou pesquisa"
					></textarea>
					
					<div class="pergunta">
						<p>Participa de algum curso?</p>
						<div class="radio">
							<input type="radio" id="participaDeCurso1" name="participaDeCurso"
							value="Sim">
							<label for="participaDeCurso1">Sim</label><br>
							<input type="radio" id="participaDeCurso2" name="participaDeCurso"
							value="Não">
							<label for="participaDeCurso2">Não</label><br>
						</div>
					</div>
					
					<p>Caso sim, cite os principais:</p>

					<textarea style="margin:0 0 40px 0;" name="resumoCursosAtuais" cols=40 rows=6 
					placeholder="Liste os cursos aos quais participa"
					></textarea>
					
					<p>Indique atividades que você gostaria de participar:</p>

					<textarea style="margin:0 0 40px 0;" name="resumoAtividadesInteresse" cols=40 rows=6 
					placeholder="Projetos de extensão e/ou pesquisa, eventos, cursos"
					></textarea>
					
					<p>Agradecemos a sua participação, que foi de suma 
					importância. Caso tenha alguma sugestão que possa enriquecer 
					este questionário, por favor, utilize o espaço abaixo:</p>

					<textarea name="resumoSugestaoQuestionario" cols=40 rows=6 
					placeholder="Deixe aqui sua sugestão"
					></textarea>

				</fieldset>
				<input class="submeter" type="submit" name="botaoConfirmar" id="botaoConfirmar" value="Enviar Resposta" onclick="envioSucesso(event)">										
			</form>
		</div>	
			<footer>
				<hr>
				<a>Copyright @ 2023 Portal do Egresso da Universidade Federal do Pará</a>
			</footer> 
		<script src="validaFormulario.js"></script>	
		<script src="validaPergunta.js"></script>
	</body>
<html>