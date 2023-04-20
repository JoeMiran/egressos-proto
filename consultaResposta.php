<?php
include_once 'dadosEgresso.php';
session_start();
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

        <!-------------------------------- Início da area de cabeçalho ------------------------------------>
        <header>
            <div id="navbar">
                <div class="resp">
                        <h1>
                            <strong>Consulta de Egressos da UFPA</strong>
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
        <!-------------------------------- Fim da area de cabeçalho ------------------------------------------>   
         
        <!------------------------ Início da área de consulta de resposta ---------------------------------->
        <div id="area-principal">
            <fieldset>
                    <legend><strong>SEUS DADOS CADASTRAIS</strong></legend><br>

                    <p>CPF: <?php echo $dados['cpf'];?></p>
                    <p>Nome: <?php echo $dados['nome'];?></p>
                    <p>Email: <?php echo $dados['email'];?></p>
                    <p>Data de Nascimento: <?php echo $dados['dataNascimento'];?></p>
                    <p>Idade: <?php echo $dados['idade'];?></p>
                    <p>Genero: <?php echo $dados['genero'];?></p>
                    <p>Cor: <?php echo $dados['cor'];?></p>
                    <p>Curso: <?php echo $dados['curso'];?></p>
                    <p>Ano de Ingresso: <?php echo $dados['anoIngresso'];?></p>
                    <p>Campus: <?php echo $dados['campus'];?></p>
                    <p>Obteve bolsa durante o curso?: <?php echo $dados['bolsa'];?></p>
                    <p><?php echo $dados['resumoBolsa'];?></p>
                    <p>Participou de atividades acadêmicas extracurriculares durante o curso? <?php echo $dados['atividadesExtracurriculares'];?></p>
                    <p>Durante o curso, você desenvolveu atividade remunerada fora da Universidade? <?php echo $dados['atividadeRemunerada'];?></p>
                    <p>Curso de Pós-Graduação concluído ou em andamento: <?php echo $dados['cursoPosGraduacao'];?></p>
                    <p>Situação do curso: <?php echo $dados['situacaoCursoPosGraduacao'];?></p>
                    <p>posGraduacaoUfpa: <?php echo $dados['posGraduacaoUfpa'];?></p>
                    <p>inseridoNoMercado: <?php echo $dados['inseridoNoMercado'];?></p>
                    <p>tipoDeEmprego: <?php echo $dados['tipoDeEmprego'];?></p>
                    <p>tempoFormaturaEmprego: <?php echo $dados['tempoFormaturaEmprego'];?></p>
                    <p>trabalhaNaAreaDeFormacao: <?php echo $dados['trabalhaNaAreaDeFormacao'];?></p>
                    <p>faixaSalarial: <?php echo $dados['faixaSalarial'];?></p>
                    <p>relacaoCursoTrabalho: <?php echo $dados['relacaoCursoTrabalho'];?></p>
                    <p>recebeuOrientacao: <?php echo $dados['recebeuOrientacao'];?></p>
                    <p>disciplinasForamUteis: <?php echo $dados['disciplinasForamUteis'];?></p>
                    <p>estagioContribuiuEmprego: <?php echo $dados['estagioContribuiuEmprego'];?></p>
                    <p>resumoSituacaoProfissional: <?php echo $dados['resumoSituacaoProfissional'];?></p>
                    <p>satisfacaoComCurso: <?php echo $dados['satisfacaoComCurso'];?></p>
                    <p>resumoSatisfacaoComCurso: <?php echo $dados['resumoSatisfacaoComCurso'];?></p>
                    <p>recomendaCurso: <?php echo $dados['recomendaCurso'];?></p>
                    <p>resumoRecomendacaoCurso: <?php echo $dados['resumoRecomendacaoCurso'];?></p>
                    <p>participaDeEventos: <?php echo $dados['participaDeEventos'];?></p>
                    <p>resumoEventosAtuais: <?php echo $dados['resumoEventosAtuais'];?></p>
                    <p>participaDeProjeto: <?php echo $dados['participaDeProjeto'];?></p>
                    <p>resumoProjetosAtuais: <?php echo $dados['resumoProjetosAtuais'];?></p>
                    <p>participaDeCurso: <?php echo $dados['participaDeCurso'];?></p>
                    <p>resumoCursosAtuais: <?php echo $dados['resumoCursosAtuais'];?></p>
                    <p>resumoAtividadesInteresse: <?php echo $dados['resumoAtividadesInteresse'];?></p>
                    <p>resumoSugestaoQuestionario: <?php echo $dados['resumoSugestaoQuestionario'];?></p>

            </fieldset>
        </div>
        <!-------------------------- Fim da área de consulta de resposta ------------------------------------>

        <!--------------------------------- Início da área do rodapé --------------------------------------->
        <footer>
            <hr>
            <a>Copyright @ 2023 Portal do Egresso da Universidade Federal do Pará</a>
        </footer>
        <!--------------------------------- Fim da área do rodapé --------------------------------------->
    
    </body>
</html>