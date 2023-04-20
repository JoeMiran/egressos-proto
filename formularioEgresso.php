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
    <body>

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
            	<button class="return" type="button"><strong><a style="font-size: larger;" class="link" href="validaCpf.php">🢀</a></strong></button>
            </a>
        </div>
	</header>

	<body>
					
		<div id="area-principal">
			<form onsubmit="return validaFormulario()" action="salvaQuestionario.php" method="post" name="resposta">

				<!-- <h3>Perfil sócio demográfico: caracterização contextual do público pesquisado<br><br></h3> -->

				<fieldset>
					<!-- --------------------------------------------------------------- -->
					<legend><strong>DADOS PESSOAIS</strong></legend><br>

					<?php echo 'Nome: ' . $_SESSION['nome'] . '<br><br>';?>
					
					<?php echo 'Email: '.$_SESSION['email'] .'<br><br>';?>
					
					<?php echo 'Idade: ' . $_SESSION['idade'] . ' anos<br><br>';?><br><br>
					<!-- --------------------------------------------------------------- -->
					<label for="genero" style="font-size: large;">Gênero: </label>
					<select id="genero" name="genero">
						<option>Selecione</option>
						<option value="Masculino">Masculino</option>
						<option value="Feminino">Feminino</option>
						<option value="Outro">Outro</option>	
					</select><br><br>
						
					<label for="cor" style="font-size: large;">Cor/Raça: </label>
					<select id="cor" name="cor">
						<option>Selecione</option>
						<option value="Preto">Preto</option>
						<option value="Branco">Branco</option>
						<option value="Pardo">Pardo</option>
						<option value="Amarelo">Amarelo</option>
						<option value="Indigena">Indígena</option>
						<option value="Não declarada">Não desejo declarar</option>		
					</select>
					<!-- --------------------------------------------------------------- -->
				</fieldset><br>

				<fieldset>
					<!-- --------------------------------------------------------------- -->
					<legend><strong>SOBRE SUA FORMAÇÃO NA UNIVERSIDADE</strong></legend><br>

					<?php echo 'Curso: ' . $_SESSION['curso'];?><br><br>
					
					<?php echo 'Campus: ' . $_SESSION['campus'];?><br><br>

					<?php echo 'Ano de Ingresso: ' . $_SESSION['anoIngresso'];?><br><br>
					
					<?php echo 'Ano de Conclusão: '// . $_SESSION['anoConclusao'];
					?><br><br><br>
					<!-- --------------------------------------------------------------- -->
					<p>Obteve bolsa durante o curso?</p><br>
					
					<input type="radio" name="bolsa" id="bolsa1">
					<label for="bolsa1">Sim</label><br>
					<input type="radio" name="bolsa" id="bolsa2">
					<label for="bolsa2">Não</label><br><br>

					<p>Caso tenha obtido:</p><br>
					<textarea cols=40 rows=6 placeholder="Liste as bolsas que obteve durante a formação..."></textarea><br><br>
					<!-- --------------------------------------------------------------- -->
				</fieldset><br>
					
				<fieldset>
					
					<legend><strong>DADOS COMPLEMENTARES</strong></legend>
					<!-- --------------------------------------------------------------- -->
					<p>Participou de atividades acadêmicas extracurriculares durante o curso?</p><br>

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
					<label for="outrasAtividades">Outras</label><br><br>
					<!-- --------------------------------------------------------------- -->
					<p>Durante o curso, você desenvolveu atividade remunerada fora da Universidade?</p><br>
				
					<input type="radio" name="AtividadeRemunerada" id="AtividadeRemunerada1"
					value="Todo o período do curso">
					<label for="AtividadeRemunerada1">Todo o período do curso</label><br>
				
					<input type="radio" name="AtividadeRemunerada" id="AtividadeRemunerada2"
					value="Na maior parte do curso">
					<label for="AtividadeRemunerada2">Na maior parte do curso</label><br>
							
					<input type="radio" name="AtividadeRemunerada" id="AtividadeRemunerada3"
					value="Por pouco tempo na trajetória do curso">
					<label for="AtividadeRemunerada3">Por pouco tempo na trajetória do 
						curso</label><br>
				
					<input type="radio" name="AtividadeRemunerada" id="AtividadeRemunerada4"
					value="Não">
					<label for="AtividadeRemunerada4">Não</label><br><br>
					<!-- --------------------------------------------------------------- -->
					<label style="font-size: large;">Curso de Pós-Graduação concluído ou em andamento:</label>
				
					<select name="cursoPosGraduacao" id="cursoPosGraduacao"><br>
						<option value="Nenhum">Nenhum</option>
						<option value="Aperfeiçoamento">Aperfeiçoamento</option>
						<option value="Especialização">Especialização</option>
						<option value="Mestrado">Mestrado</option>
						<option value="Doutorado">Doutorado</option>
					</select><br><br>
				
					<p>Situação do curso:</p><br>
							
					<input type="radio" name="situacaoCursoPosGraduacao" 
					id="posGraduacaoEmAndamento">
					<label for="posGraduacaoEmAndamento">Em andamento</label><br>
					<input type="radio" name="situacaoCursoPosGraduacao" 
					id="posGraduacaoConcluida">
					<label for="posGraduacaoConcluida">Concluído</label><br><br>
				
					<p>Em caso de Curso Pós-Graduação, realizado ou andamento, é na UFPA?</p><br>

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
					<legend><strong>SITUAÇÃO PROFISSIONAL</strong></legend>

					<p>Atualmente estão inserido/a no mercado de trabalho?</p><br>

					<input type="radio" name="inseridoNoMercado" id="inseridoNoMercado1" 
					value="Sim">
					<label for="">Sim</label><br>
					<input type="radio" name="inseridoNoMercado" id="inseridoNoMercado2" 
					value="Não">
					<label for="">Não</label><br><br>

					<p>Se estão, qual a forma de obtenção de emprego?</p><br>

					<input type="radio" id="consurso" name="formaObtencao">
					<label for="concurso">Consurso</label><br>
					<input type="radio" id="ctps" name="formaObtencao">
					<label for="ctps">Profissional Formal</label><br>
					<input type="radio" id="autonomo" name="formaObtencao">
					<label for="autonomo">Autônomo</label><br>
					<input type="radio" id="informal" name="formaObtencao">
					<label for="informal">Atividade informal</label><br><br>
					<p>Tempo necessário para conseguir atividade remunerada após a formatura:</p><br>
					
					<input type=radio id="poucotempoMercado" name="tempoMercado">
					<label for="poucotempoMercado">0 a 6 meses</label><br>
					<input type=radio id="mediotempoMercado" name="tempoMercado">
					<label for="mediotempoMercado">7 a 12 meses</label><br>
					<input type=radio id="maiortempoMercado" name="tempoMercado">
					<label for="maiortempoMercado">mais de 12 meses</label><br><br>
				
					<p>Seu trabalho é na sua área de formação?</p><br>
					
					<input type="radio" name="trabalhaNaAreaDeFormacao" 
					id="trabalhaNaAreaDeFormacao1" value="Sim">
					<label for="">Sim</label><br>
					<input type="radio" name="trabalhaNaAreaDeFormacao" 
					id="trabalhaNaAreaDeFormacao2" value="Não">
					<label for="">Não</label><br><br>
				
					<p>Faixa salarial:</p><br>
					
					<input type=radio id="baixoSalario" name="salario">
					<label for="baixoSalario">1 a 2 salários mínimos</label><br>
					<input type=radio id="medioSalario" name="salario">
					<label for="medioSalario">3 a 5 salários mínimos</label><br>
					<input type=radio id="altoSalario" name="salario">
					<label for="altoSalario">mais de 5 salários</label><br><br>
					<!-- --------------------------------------------------------------- -->
				</fieldset><br>

				<fieldset>

					<legend><strong>ATIVIDADE LABORAL</strong></legend>
					<!-- --------------------------------------------------------------- -->

					<p>Há uma relação entre o curso de graduação concluido e a atividade laboral que está exercendo?</p><br>
					
					<input type="radio" id="simTrabalho" name="formacaoTrabalho">
					<label>Sim</label><br>
					<input type="radio" id="naoTrabalho" name="formacaoTrabalho">
					<label>Não</label>
					<br><br>

					<p>Recebeu orientação, no âmbito do seu respectivo curso, para atuar no mercado de trabalho?</p><br>
					
					<input type="radio" id="comOrientacao" name="orientacao">
					<label for="comOrientacao">Sim</label><br>
					<input type="radio" id="naoTrabalho" name="orientacao">
					<label for="semOrientacao">Não</label>
					<br><br>

					<p>As temáticas e/ou assuntos abordados nas várias disciplinas cursadas tiveram utilidade para o exercício profissional?</p><br>
					
					<input type="radio" id="util" name="utilidade">
					<label for="util">Sim</label><br>
					<input type="radio" id="inutil" name="utilidade">
					<label for="inutil">Não</label>
					<br><br>

					<p>O(s) estágio(s) que cumpriu no curso contribuiu para a inserção profissional no mercado de trabalho?</p><br>
					
					<input type="radio" id="contribuiu" name="contribuicao">
					<label for="contribuiu">Sim</label><br>
					<input type="radio" id="naoContribuiu" name="contribuicao">
					<label for="naoContribuiu">Não</label><br>
					<input type="radio" id="indiferente" name="contribuicao">
					<label for="indiferente">Não fiz estágio</label><br><br>

					<p>Comente:</p><br>
					<textarea cols=40 rows=6 placeholder="Fale um pouco mais sobre como anda sua situação profissional..."></textarea><br><br>
						<!-- --------------------------------------------------------------- -->
				</fieldset><br>

				<fieldset>
						
					<legend><strong>NÍVEL DE SATISFAÇÃO</strong></legend>
					<!-- --------------------------------------------------------------- -->
					<p>Em relação à satisfação com seu curso, você está?</p><br>
					<input type="radio" id="muitoSatisfeito" name="satisfacao">
					<label for="muitoSatisfeito">Muito Satisfeito</label><br>
					<input type="radio" id="satisfeito" name="satisfacao">
					<label for="satisfeito">Satisfeito</label><br>
					<input type="radio" id="insatisfeito" name="satisfacao">
					<label for="insatisfeito">Insatisfeito</label><br><br>
				
					<p>Justificativa:</p><br>
					<textarea cols=40 rows=6 placeholder="Fale um pouco mais sobre sua resposta anterior... "></textarea><br><br>

					<p>Você recomendaria seu curso para outra pessoa?</p><br>
					<input type="radio" id="recomendo" name="conselho">
					<label for="recomendo">Sim</label><br>
					<input type="radio" id="naoRecomendo" name="conselho">
					<label for="naoRecomendo">Não</label><br><br>

					<p>Justificativa:</p><br>
					<textarea cols=40 rows=6 placeholder="Fale um pouco mais sobre sua resposta anterior... "></textarea><br><br>
						<!-- --------------------------------------------------------------- -->
					
				</fieldset><br>

				<fieldset>

					<legend><strong>RELAÇÃO ATUAL COM A UNIVERSIDADE</strong></legend>
					<!-- --------------------------------------------------------------- -->
					<p>Participa de eventos acadêmicos da UFPA?</p>
					<input type="radio" id="participaEvento" name="evento">
					<label for="participaEvento">Sim</label><br>
					<input type="radio" id="naoParticipaEvento" name="evento">
					<label for="naoParticipaEvento">Não</label><br><br>

					<p>Caso tenha participe:</p><br>
					<textarea cols=40 rows=6 placeholder="Cite os eventos aos quais mais participa... "></textarea><br><br>

					<p>Participa de grupos de pesquisa e/ou projetos de extensão?</p><br>
					<input type="radio" id="participaProjeto" name="projeto">
					<label for="participaProjeto">Sim</label><br>
					<input class="nao_preenchido" type="radio" id="naoParticipaProjeto" name="projeto">
					<label for="naoParticipaProjeto">Não</label><br><br>

					<p>Caso participe:</p><br>
					<textarea cols=40 rows=6 placeholder="Liste os grupos de pesquisa e/ou extensão aos quais participa... "></textarea><br><br>

					<p>Participa de algum curso?</p><br>
					<input type="radio" id="partipaCurso" name="curso">
					<label for="participaCurso">Sim</label><br>
					<input type="radio" id="naoParticipaCurso" name="curso"  required>
					<label for="naoParticipaCurso">Não</label><br><br>

					<p>Caso tenha participe:</p><br>
					<textarea cols=40 rows=6 placeholder="Liste os cursos aos quais participa... "></textarea><br><br>

					<p>Indique atividades que você gostaria de participar:</p><br>
					<textarea cols=40 rows=6 placeholder="Projetos de extensão e/ou pesquisa, eventos, cursos... "></textarea><br><br>

					<p>Agradecemos a sua participação, que foi de suma 
					importância. Caso tenha alguma sugestão que possa enriquecer 
					este questionário, por favor, utilize o espaço abaixo:</p><br>
					<textarea cols=40 rows=6 placeholder="Deixe aqui sua contribuição..."></textarea><br><br>

				</fieldset>
				<input class="submeter" type="submit" name="botaoConfirmar" id="botaoConfirmar" value="Enviar Resposta" onclick="envioSucesso(event)">										
			</form>

			<!-- <script src="validaFormulario.js"></script> -->
    <!--------------------- Início do código JavaScrip para tratamento de erro ---------------------------->
	 <script>
		function envioSucesso(event) {
			
			var campos = document.querySelectorAll('textarea');
			var todosPreenchidos = true;

			for (var i = 0; i < campos.length; i++) {
				var campo = campos[i];
				if (campo.value.trim() === '') {
					campo.classList.add('nao_preenchido');
					todosPreenchidos = false;
				} else {
					campo.classList.remove('nao_preenchido');
				}
			}

			if (!todosPreenchidos) {
				alert('Por favor, preencha todos os campos.');
				event.preventDefault();
			 }
		}
	</script>
    <!--------------------- Fim do código JavaScrip para tratamento de erro ---------------------------->

		</div>	
			<footer>
				<hr>
				<a>Copyright @ 2023 Portal do Egresso da Universidade Federal do Pará</a>
			</footer> 
    </body>
<html>