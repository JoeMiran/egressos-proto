﻿<?php
include_once 'dadosEgresso.php';
definirDadosSessao();
cpfSecurity();
$dados = getDadosEgressoFromDatabase($_SESSION['cpf']);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Verificar Credenciais</title>
</head>

<body>

    <!-------------------------------- Iní­cio da area de cabeçalho ------------------------------------>
    <header>
        <div id="navbar">
            <!---<div class="resp">--->
            <a href="https://egressos.ufpa.br/" class="logo">
                <img src="images/logo_ufpa.png">
            </a>
            <h1>
                <strong>Consulta de Egressos UFPA</strong>
            </h1>
            <button class="return"><strong><a href="validaCpf.php"><p style="font-size: larger;" class="link">🢀</p></a></strong></button>
        </div>
    </header>
    <!-------------------------------- Fim da area de cabeçalho ------------------------------------------>

    <!------------------------ Início da área de consulta de resposta ---------------------------------->
    <section>
        <main class="area-principal-pai">
            <div id="area-principal">
                <div class="dados">

                    <fieldset>

                        <legend><strong>DADOS PESSOAIS</strong></legend><br>

                        <p><strong>CPF: </strong>
                            <span><?php echo $dados['cpf']; ?></span>
                        </p><br>
                        <p><strong>Nome: </strong>
                            <span><?php echo $dados['nome']; ?></span>
                        </p><br>
                        <p><strong>Email: </strong>
                            <span><?php echo $dados['email']; ?></span>
                        </p><br>
                        <p><strong>Telefone:</strong>
                            <span><?php echo $dados['telefone'] ?></span>
                        </p><br>
                        <p><strong>Data de Nascimento: </strong>
                            <span><?php echo $dados['dataNascimento']; ?></span>
                        </p><br>
                        <p><strong>Idade: </strong>
                            <span> <?php echo $dados['idade']; ?></span>
                        </p><br>
                        <p><strong>Genero: </strong>
                            <span><?php echo $dados['genero']; ?></span>
                        </p><br>
                        <p><strong>Cor: </strong>
                            <span><?php echo $dados['cor']; ?></span>
                        </p><br>

                    </fieldset>

                    <fieldset>

                        <legend><strong>FORMAÇÃO</strong></legend><br>

                        <p><strong>Curso: </strong>
                            <span><?php echo $dados['curso']; ?></span>
                        </p><br>
                        <p><strong>Ano de Ingresso: </strong>
                            <span><?php echo $dados['anoIngresso']; ?></span>
                        </p><br>
                        <p><strong>Campus: </strong>
                            <span><?php echo $dados['campus']; ?></span>
                        </p><br>
                        <p><strong>Obteve bolsa durante o curso?: </strong>
                            <span><?php echo $dados['bolsa']; ?></span>
                        </p><br>

                        <?php if (!empty($dados['resumoBolsa'])) : ?>
                            <p><strong>Resumo da bolsa:</strong></p>
                            <span><?php echo $dados['resumoBolsa']; ?></span>
                            </p><br>
                        <?php endif; ?>

                    </fieldset>

                    <fieldset>

                        <legend><strong>DADOS COMPLEMENTARES</strong></legend><br>

                        <?php if (!empty($dados['atividadesExtracurriculares'])) : ?>
                            <p><strong>Atividades acadêmicas extracurriculares durante o curso:</strong>
                                <span><?php echo $dados['atividadesExtracurriculares']; ?></span>
                            </p><br>
                        <?php endif; ?>

                        <p><strong>Atividade remunerada fora da Universidade:</strong>
                            <span><?php echo $dados['atividadeRemunerada']; ?></span>
                        </p><br>

                        <p><strong>Curso de Pós-Graduação: </strong>
                            <span><?php echo $dados['cursoPosGraduacao']; ?></span>
                        </p><br>

                        <?php if (!empty($dados['situacaoCursoPosGraduacao'] &&
                            $dados['situacaoCursoPosGraduacao'])) : ?>
                            <p><strong>Situação do curso: </strong>
                                <span><?php echo $dados['situacaoCursoPosGraduacao']; ?></span>
                            </p><br>
                            <p><strong>Pós-Gradução na UFPA:</strong>
                                <span><?php echo $dados['posGraduacaoUfpa']; ?></span>
                            </p><br>
                        <?php endif; ?>

                    </fieldset>

                    <fieldset>

                        <legend><strong>SITUAÇÃO PROFISSIONAL</strong></legend><br>

                        <p><strong>Inserido no mercado de trabalho: </strong>
                            <span><?php echo $dados['inseridoNoMercado']; ?></span>
                        </p><br>

                        <?php if (!empty($dados['tipoDeEmprego'] &&
                            $dados['tempoFormaturaEmprego'] &&
                            $dados['trabalhaNaAreaDeFormacao'] &&
                            $dados['faixaSalarial'] &&
                            $dados['relacaoCursoTrabalho'] &&
                            $dados['disciplinasForamUteis'] &&
                            $dados['estagioContribuiuEmprego'])) : ?>
                            <p><strong>Modalidade de emprego:</strong>
                                <span><?php echo $dados['tipoDeEmprego']; ?></span>
                            </p><br>
                            <p><strong>Tempo necessário para conseguir atividade remunerada: </strong>
                                <span><?php echo $dados['tempoFormaturaEmprego']; ?></span>
                            </p><br>
                            <p><strong>Trabalha na área de formação: </strong>
                                <span><?php echo $dados['trabalhaNaAreaDeFormacao']; ?></span>
                            </p><br>
                            <p><strong>Faixa salarial: </strong>
                                <span><?php echo $dados['faixaSalarial']; ?></span>
                            </p><br>
                            <p><strong>Há relação entre trabalho e área de formação: </strong>
                                <span><?php echo $dados['relacaoCursoTrabalho']; ?></span>
                            </p><br>
                            <p><strong>As disciplinas do curso foram úteis para inserção no mercado:</strong>
                                <span><?php echo $dados['disciplinasForamUteis']; ?></span>
                            </p><br>
                            <p><strong>O(s) estágio supervisionado teve utilidade para a inserção no mercado:</strong>
                                <span><?php echo $dados['estagioContribuiuEmprego']; ?></span>
                            </p><br>

                        <?php endif; ?>

                        <p><strong>Recebeu orientação para atuar no mercado de trabalho: </strong>
                            <span><?php echo $dados['recebeuOrientacao']; ?></span>
                        </p><br>

                    </fieldset>

                    <fieldset>

                        <legend><strong>NÍVEL DE SATISFAÇÃO</strong></legend><br>

                        <p><strong>Satisfação com o curso:</strong>
                            <span><?php echo $dados['satisfacaoComCurso']; ?></span>
                        </p><br>

                        <?php if (!empty($dados['resumoSatisfacaoComCurso'])) : ?>
                            <p><strong>Resumo da satisfação:</strong> </p>
                            <span><?php echo $dados['resumoSatisfacaoComCurso']; ?></span>
                            </p><br>
                        <?php endif; ?>
                        <p><strong>Recomendaria o curso para outra pessoa:</strong>
                            <span><?php echo $dados['recomendaCurso']; ?></span>
                        </p><br>

                        <?php if (!empty($dados['resumoRecomendacaoCurso'])) : ?>
                            <p><strong>Justificativa: </strong></p>
                            <span><?php echo $dados['resumoRecomendacaoCurso']; ?></span>
                            </p><br>
                        <?php endif; ?>

                    </fieldset>

                    <fieldset>

                        <legend><strong>RELAÇÃO COM A UNIVERSIDADE</strong></legend><br>

                        <p><strong>Paticipa de eventos acadêmicos na UFPA:</strong>
                            <span><?php echo $dados['participaDeEventos']; ?></span>
                        </p><br>

                        <?php if (!empty($dados['resumoEventosAtuais'])) : ?>
                            <p><strong>Resumo do(s) evento(s) que participa: </strong></p>
                            <span><?php echo $dados['resumoEventosAtuais']; ?></span>
                            </p><br>
                        <?php endif; ?>

                        <p><strong>Participa de grupo de pesquisa ou projetos de extensão na UFPA:</strong>
                            <span><?php echo $dados['participaDeProjeto']; ?></span>
                        </p><br>

                        <?php if (!empty($dados['resumoProjetosAtuais'])) : ?>
                            <p><strong>Resumo do(s) projeto(s) que participa:</strong> </p>
                            <span><?php echo $dados['resumoProjetosAtuais']; ?></span>
                            </p><br>
                        <?php endif; ?>

                        <p><strong>Participa de algum curso na UFPA:</strong>
                            <span><?php echo $dados['participaDeCurso']; ?></span>
                        </p><br>

                        <?php if (!empty($dados['resumoCursosAtuais'])) : ?>
                            <p><strong>Resumo do(s) curso(s):</strong> </p>
                            <span><?php echo $dados['resumoCursosAtuais']; ?></span>
                            </p><br>
                        <?php endif; ?>

                        <p><strong>Atividades que você gostaria de participar: </strong></p>
                        <span><?php echo $dados['resumoAtividadesInteresse']; ?></span>
                        </p><br>

                        <p><strong>Sugestão para o questionário:</strong> </p>
                        <span><?php echo $dados['resumoSugestaoQuestionario']; ?></span>
                        </p><br>

                    </fieldset>
                </div>
            </div>
        </main>
    </section>
    <!-------------------------- Fim da área de consulta de resposta ------------------------------------>

    <!--------------------------------- Início da área do rodapé --------------------------------------->
    <footer>
        <hr>
        <a>Copyright @ 2023 Portal do Egresso da Universidade Federal do Pará</a>
    </footer>
    <!--------------------------------- Fim da área do rodapé --------------------------------------->

</body>

</html>