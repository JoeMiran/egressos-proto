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
            <button class="return" type="button"><strong><a style="font-size: larger;" class="link"
                        href="validaCpf.php">🢀</a></strong></button>
            </a>
        </div>
    </header>

    <body>

        <div id="area-principal">

            <form action="salvaQuestionario.php" method="post" name="resposta">

                <fieldset>
                    <!-- --------------------------------------------------------------- -->
                    <legend><strong>DADOS PESSOAIS</strong></legend><br>

                    <?php echo 'Nome: ' . $_SESSION['nome'] . '<br><br>'; ?>

                    <?php echo 'Email: ' . $_SESSION['email'] . '<br><br>'; ?>

                    <?php echo 'Idade: ' . $_SESSION['idade'] . ' anos<br><br>'; ?><br>
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

                    <?php echo 'Curso: ' . $_SESSION['curso']; ?><br><br>

                    <?php echo 'Campus: ' . $_SESSION['campus']; ?><br><br>

                    <?php echo 'Ano de Ingresso: ' . $_SESSION['anoIngresso']; ?><br><br>

                    <!-- --------------------------------------------------------------- -->
                    <label style="font-size: large;">Obteve bolsa durante o curso?<span></span></label><br>
                    <input type="radio" name="bolsa" id="bolsa1" value="Sim">
                    <label for="bolsa1">Sim</label><br>
                    <input type="radio" name="bolsa" id="bolsa2" value="Não">
                    <label for="bolsa2">Não</label><br><br>

                    <label style="font-size: large;">Se sim, qual(is)?</label><br>

                    <textarea name="resumoBolsa" cols=40 rows=6
                        placeholder="Descreva mais sobre a bolsa"></textarea><br><br>
                    <!-- --------------------------------------------------------------- -->
                </fieldset><br>

                <fieldset>

                    <legend><strong>DADOS COMPLEMENTARES</strong></legend>
                    <!-- --------------------------------------------------------------- -->
                    <label style="font-size: large;">Participou de atividades acadêmicas extracurriculares durante o
                        curso?<span></span></label><br>

                    <input type=checkbox id="iniciacaoCientifica" name="iniciacaoCientifica" value="">
                    <label for="iniciacaoCientifica">Iniciação Científica</label><br>

                    <input type=checkbox id="monitoria" name="monitoria">
                    <label for="monitoria">Monitoria</label><br>

                    <input type=checkbox id="estagioNaoObrigatorio" name="estagioNaoObrigatorio">
                    <label for="estagioNaoObrigatorio">Estágio Não Obrigatório pertinente ao
                        curso</label><br>

                    <input type=checkbox id="atividadeComunidade" name="atividadeComunidade">
                    <label for="atividadeComunidade">Atividade Curricular em Comunidade -
                        ACC</label><br>

                    <input type=checkbox id="participouDeEventos" name="participouDeEventos">
                    <label for="participouDeEventos">Eventos: Congressos, Seminários, etc</label><br>

                    <input type=checkbox id="empresaJunior" name="empresaJunior">
                    <label for="empresaJunior">Empresa Júnior</label><br>

                    <input type=checkbox id="diretorioAcademico" name="diretorioAcademico">
                    <label for="diretorioAcademico">Diretório Acadêmico</label><br>

                    <input type=checkbox id="outrasAtividades" name="outrasAtividades">
                    <label for="outrasAtividades">Outras Atividades</label><br><br>

                    <label style="font-size: large;">Durante o curso, você desenvolveu atividade remunerada fora da
                        Universidade?<span></span></label><br>

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

                    <input type="radio" name="atividadeRemunerada" id="atividadeRemunerada4" value="Não">
                    <label for="atividadeRemunerada4">Não realizei atividade remunerada</label><br><br>

                    <label style="font-size: large;">Curso de Pós-Graduação: </label>
                    <select name="cursoPosGraduacao" id="cursoPosGraduacao">
                        <option>Selecione</option>
                        <option value="Aperfeiçoamento">Aperfeiçoamento</option>
                        <option value="Especialização">Especialização</option>
                        <option value="Mestrado">Mestrado</option>
                        <option value="Doutorado">Doutorado</option>
						<option value="Nenhum">Nenhum</option>
                    </select><br><br>

                    <label style="font-size: large;">Situação do curso: <span></span></label><br>

                    <input type="radio" name="situacaoCursoPosGraduacao" id="posGraduacaoEmAndamento"
                        value="Em andamento">
                    <label for="posGraduacaoEmAndamento">Em andamento</label><br>
                    <input type="radio" name="situacaoCursoPosGraduacao" id="posGraduacaoConcluida" value="Concluído">
                    <label for="posGraduacaoConcluida">Concluído</label><br><br>

                    <label style="font-size: large;">Em caso de curso Pós-Graduação, realizado ou andamento, é na
                        UFPA?<span></span></label><br>

                    <input type="radio" name="posGraduacaoUfpa" id="posGraduacaoUfpa1" value="Sim">
                    <label for="posGraduacaoUfpa1">Sim</label><br>
                    <input type="radio" name="posGraduacaoUfpa" id="posGraduacaoUfpa2" value="Não">
                    <label for="posGraduacaoUfpa2">Não</label><br><br>
                    <!-- --------------------------------------------------------------- -->
                </fieldset><br>

                <fieldset>
                    <!-- --------------------------------------------------------------- -->
                    <legend><strong>SITUAÇÃO PROFISSIONAL</strong></legend>

                    <label style="font-size: large;">Atualmente está inserido/a no mercado de trabalho? <span></span></label><br>

                    <input type="radio" name="inseridoNoMercado" id="inseridoNoMercado1" value="Sim">
                    <label for="inseridoNoMercado1">Sim</label><br>
                    <input type="radio" name="inseridoNoMercado" id="inseridoNoMercado2" value="Não">
                    <label for="inseridoNoMercado2">Não</label><br><br>

					<label style="font-size: large;">Se está, qual a modalidade de emprego? <span></span></label><br>

                    <input type="radio" id="tipoDeEmprego1" name="tipoDeEmprego" value="Concursado">
                    <label for="tipoDeEmprego1">Concursado</label><br>
                    <input type="radio" id="tipoDeEmprego2" name="tipoDeEmprego" value="Profissional formal">
                    <label for="tipoDeEmprego2">Profissional formal</label><br>
                    <input type="radio" id="tipoDeEmprego3" name="tipoDeEmprego" value="Profissional autônomo">
                    <label for="tipoDeEmprego3">Profissional autônomo</label><br>
                    <input type="radio" id="tipoDeEmprego4" name="tipoDeEmprego" value="Profissional informal">
                    <label for="tipoDeEmprego4">Profissional informal</label><br><br>

                    <label style="font-size: large;">Tempo necessário para conseguir atividade remunerada após a
                        formatura: <span></span></label><br>

                    <input type=radio id="tempoFormaturaEmprego1" name="tempoFormaturaEmprego" value="0 a 6 meses">
                    <label for="tempoFormaturaEmprego1">0 a 6 meses</label><br>
                    <input type=radio id="tempoFormaturaEmprego2" name="tempoFormaturaEmprego" value="7 a 12 meses">
                    <label for="tempoFormaturaEmprego2">7 a 12 meses</label><br>
                    <input type=radio id="tempoFormaturaEmprego3" name="tempoFormaturaEmprego" value="mais de 12 meses">
                    <label for="tempoFormaturaEmprego3">mais de 12 meses</label><br><br>

                    <label style="font-size: large;">Seu trabalho é na sua área de formação? <span></span></label><br>

                    <input type="radio" name="trabalhaNaAreaDeFormacao" id="trabalhaNaAreaDeFormacao1" value="Sim">
                    <label for="trabalhaNaAreaDeFormacao1">Sim</label><br>
                    <input type="radio" name="trabalhaNaAreaDeFormacao" id="trabalhaNaAreaDeFormacao2" value="Não">
                    <label for="trabalhaNaAreaDeFormacao2">Não</label><br><br>

                    <label style="font-size: large;">Faixa salarial: <span></span></label><br>

                    <input type=radio id="faixaSalarial1" name="faixaSalarial" value="1 a 2 salários mínimos">
                    <label for="faixaSalarial1">1 a 2 salários mínimos</label><br>
                    <input type=radio id="faixaSalarial2" name="faixaSalarial" value="3 a 5 salários mínimos">
                    <label for="faixaSalarial2">3 a 5 salários mínimos</label><br>
                    <input type=radio id="faixaSalarial3" name="faixaSalarial" value="mais de 5 salários">
                    <label for="faixaSalarial3">mais de 5 salários</label><br><br>

                    <label style="font-size: large;">Há uma relação entre o curso de graduação concluido e a atividade
                        laboral que está exercendo? <span></span></label><br>

                    <input type="radio" id="relacaoCursoTrabalho1" name="relacaoCursoTrabalho" value="Sim">
                    <label>Sim</label><br>
                    <input type="radio" id="relacaoCursoTrabalho2" name="relacaoCursoTrabalho" value="Não">
                    <label>Não</label><br><br>

                    <label style="font-size: large;">Recebeu orientação, no âmbito do seu respectivo curso, para atuar no
                        mercado de trabalho? <span></span></label><br>

                    <input type="radio" id="recebeuOrientacao1" name="recebeuOrientacao" value="Sim">
                    <label for="recebeuOrientacao1">Sim</label><br>
                    <input type="radio" id="recebeuOrientacao2" name="recebeuOrientacao" value="Não">
                    <label for="recebeuOrientacao2">Não</label><br><br>

                    <label style="font-size: large;">As temáticas e/ou assuntos abordados nas várias disciplinas cursadas
                        tiveram utilidade para o exercício profissional? <span></span></label><br>

                    <input type="radio" id="disciplinasForamUteis1" name="disciplinasForamUteis" value="Sim">
                    <label for="disciplinasForamUteis1">Sim</label><br>
                    <input type="radio" id="disciplinasForamUteis2" name="disciplinasForamUteis" value="Não">
                    <label for="disciplinasForamUteis2">Não</label><br><br>

                    <label style="font-size: large;">O(s) estágio(s) que cumpriu no curso contribuiu para a inserção
                        profissional no mercado de trabalho? <span></span></label><br>

                    <input type="radio" id="estagioContribuiuEmprego1" name="estagioContribuiuEmprego" value="Sim">
                    <label for="estagioContribuiuEmprego1">Sim</label><br>
                    <input type="radio" id="estagioContribuiuEmprego2" name="estagioContribuiuEmprego" value="Não">
                    <label for="estagioContribuiuEmprego2">Não</label><br>
                    <input type="radio" id="estagioContribuiuEmprego3" name="estagioContribuiuEmprego"
                        value="Não fiz estágio">
                    <label for="estagioContribuiuEmprego3">Não fiz estágio</label><br><br>

                    <label style="font-size: large;">Comente:</label><br>

                    <textarea name="resumoSituacaoProfissional" cols=40 rows=6
                        placeholder="Descreva mais sobre sua situação profissional"></textarea><br><br>
                    <!-- --------------------------------------------------------------- -->
                </fieldset><br>

                <fieldset>

                    <legend><strong>NÍVEL DE SATISFAÇÃO</strong></legend>
                    <!-- --------------------------------------------------------------- -->
                    <label style="font-size: large;">Em relação à satisfação com seu curso, você está? <span></span></label><br>

                    <input type="radio" id="satisfacaoComCurso1" name="satisfacaoComCurso" value="Muito Satisfeito">
                    <label for="satisfacaoComCurso1">Muito Satisfeito</label><br>
                    <input type="radio" id="satisfacaoComCurso2" name="satisfacaoComCurso" value="Satisfeito">
                    <label for="satisfacaoComCurso2">Satisfeito</label><br>
                    <input type="radio" id="satisfacaoComCurso3" name="satisfacaoComCurso" value="Insatisfeito">
                    <label for="satisfacaoComCurso3">Insatisfeito</label><br><br>

                    <label style="font-size: large;">Justifique:</label><br>

                    <textarea name="resumoSatisfacaoComCurso" cols=40 rows=6
                        placeholder="Justifique sua satisfação com o curso"></textarea><br><br>

                    <label style="font-size: large;">Você recomendaria seu curso para outra pessoa? <span></span></label><br>

                    <input type="radio" id="recomendaCurso1" name="recomendaCurso" value="Sim">
                    <label for="recomendaCurso1">Sim</label><br>
                    <input type="radio" id="recomendaCurso2" name="recomendaCurso" value="Não">
                    <label for="recomendaCurso2">Não</label><br><br>

                    <label style="font-size: large;">Justifique:</label><br>

                    <textarea name="resumoRecomendacaoCurso" cols=40 rows=6
                        placeholder="Justifique a posição da sua recomendação"></textarea><br>

                    <!-- --------------------------------------------------------------- -->
                </fieldset><br>

                <fieldset>

                    <legend><strong>RELAÇÃO COM A UNIVERSIDADE</strong></legend>
                    <!-- --------------------------------------------------------------- -->
                    <label style="font-size: large;">Participa de eventos acadêmicos da UFPA? <span></span></label><br>
                    <input type="radio" id="participaDeEventos1" name="participaDeEventos" value="Sim">
                    <label for="participaDeEventos1">Sim</label><br>
                    <input type="radio" id="participaDeEventos2" name="participaDeEventos" value="Não">
                    <label for="participaDeEventos2">Não</label><br><br>

                    <label style="font-size: large;">Caso sim, cite os principais:</label><br>

                    <textarea name="resumoEventosAtuais" cols=40 rows=6
                        placeholder="Cite os eventos aos quais mais participa"></textarea><br><br>

                    <label id="pergunta" style="font-size: large;">Participa de grupos de pesquisa e/ou projetos de extensão? <span></span></label><br>

                    <input type="radio" id="participaDeProjeto1" name="participaDeProjeto" value="Sim">
                    <label for="participaDeProjeto1">Sim</label><br>
                    <input type="radio" id="participaDeProjeto2" name="participaDeProjeto" value="Não">
                    <label for="participaDeProjeto2">Não</label><br><br>

                    <label style="font-size: large;">Caso sim, cite os principais:</label><br>

                    <textarea name="resumoProjetosAtuais" cols=40 rows=6
                        placeholder="Projetos atuais de extensão e/ou pesquisa"></textarea><br><br>

                    <label style="font-size: large;">Participa de algum curso? <span></span></label><br>

                    <input type="radio" id="participaDeCurso1" name="participaDeCurso" value="Sim">
                    <label for="participaDeCurso1">Sim</label><br>
                    <input type="radio" id="participaDeCurso2" name="participaDeCurso" value="Não">
                    <label for="participaDeCurso2">Não</label><br><br>

                    <label style="font-size: large;">Caso sim, cite os principais:</label><br>

                    <textarea name="resumoCursosAtuais" cols=40 rows=6
                        placeholder="Liste os cursos aos quais participa"></textarea><br><br>

                    <label style="font-size: large;">Indique atividades que você gostaria de participar: </label><br>

                    <textarea name="resumoAtividadesInteresse" cols=40 rows=6
                        placeholder="Projetos de extensão e/ou pesquisa, eventos, cursos"></textarea><br><br>

                    <label style="font-size: large;" id="pergunta">Agradecemos a sua participação, que foi de suma
                        importância. Caso tenha alguma sugestão que possa enriquecer
                        este questionário, por favor, utilize o espaço abaixo:</label><br>

                    <textarea name="resumoSugestaoQuestionario" cols=40 rows=6
                        placeholder="Deixe aqui sua sugestão"></textarea><br><br>

                </fieldset>
                <input class="submeter" type="submit" name="botaoConfirmar" id="botaoConfirmar" value="Enviar Resposta"
                    onclick="envioSucesso(event)">
            </form>
            <!--------------------- Início do código JavaScrip para tratamento de erro ---------------------------->
            <script>
            function envioSucesso(event) {
                const campos = document.querySelectorAll('textarea');
                const inputs = document.querySelectorAll('input');
                const selects = document.querySelectorAll('select');
                const spans = document.querySelectorAll('span');
       
                let todosPreenchidos = true;

                    for (const campo of campos) {
                        
                        if (campo.value.length === 0) {
                            campo.classList.add('nao_preenchido');
                            todosPreenchidos = false;
                        } else {
                            campo.classList.remove('nao_preenchido');
                        }
                    }

                    for (const select of selects) {
                        
                        if (select.selectedIndex === 0) {
                            select.classList.add('select_vazio');
                            todosPreenchidos = false;
                        } else {
                            select.classList.remove('select_vazio');
                        }
                    }

                    if (!todosPreenchidos) {
                        alert(' Todos os campos indicados com " * " são obrigatórios.');
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