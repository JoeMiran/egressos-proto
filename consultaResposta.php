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

    <!-------------------------------- InÃƒÂ­cio da area de cabeÃçalho ------------------------------------>
    <header>
        <div id="navbar">
            <div class="resp">
                <h1>
                    <strong>Consulta de Egressos UFPA</strong>
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
    <!-------------------------------- Fim da area de cabeÃçalho ------------------------------------------>

    <!------------------------ InÃ­Â­cio da área de consulta de resposta ---------------------------------->
    <section>
        <div id="area-principal">
            <div class="dados">
               
                <fieldset>
                    
                    <legend><strong>DADOS PESSOAIS</strong></legend><br>
            
                    <p>CPF: 
                        <span><?php echo $dados['cpf']; ?></span></p><br>
                    <p>Nome: 
                        <span><?php echo $dados['nome']; ?></span></p><br>
                    <p>Email: 
                        <span><?php echo $dados['email']; ?></span></p><br>
                    <p>Telefone:
                        <span><?php echo $dados['telefone']?></span></p><br>
                    <p>Data de Nascimento: 
                        <span><?php echo $dados['dataNascimento']; ?></span></p><br>
                    <p>Idade: 
                        <span> <?php echo $dados['idade']; ?></span></p><br>
                    <p>Genero: 
                        <span><?php echo $dados['genero']; ?></span></p><br>
                    <p>Cor: 
                        <span><?php echo $dados['cor']; ?></span></p><br>
                
                </fieldset>
             
                <fieldset>
                    
                    <legend><strong>FORMAÇÃO</strong></legend><br>
                    
                    <p>Curso: 
                        <span><?php echo $dados['curso']; ?></span></p><br>
                    <p>Ano de Ingresso: 
                        <span><?php echo $dados['anoIngresso']; ?></span></p><br>
                    <p>Campus: 
                        <span><?php echo $dados['campus']; ?></span></p><br>
                    <p>Obteve bolsa durante o curso?: 
                        <span><?php echo $dados['bolsa']; ?></span></p><br>
                    <p>Resumo da bolsa:</p>
                        <span><?php echo $dados['resumoBolsa']; ?></span></p><br>
                
                </fieldset>

                <fieldset>
                    
                    <legend><strong>DADOS COMPLEMENTARES</strong></legend><br>        
                        
                    <p>Atividades acadêmicas extracurriculares durante o curso:
                        <span><?php echo $dados['atividadesExtracurriculares']; ?></span></p><br>
                    <p>Atividade remunerada fora da Universidade:
                        <span><?php echo $dados['atividadeRemunerada']; ?></span></p><br>
                    <p>Curso de Pós-Graduação: 
                        <span><?php echo $dados['cursoPosGraduacao']; ?></span></p><br>
                    <p>Situação do curso: 
                        <span><?php echo $dados['situacaoCursoPosGraduacao']; ?></span></p><br>
                    <p>Pós-Gradução na UFPA:
                        <span><?php echo $dados['posGraduacaoUfpa']; ?></span></p><br>
                
                </fieldset>
                
                <fieldset>
                    
                    <legend><strong>SITUAÇÃO PROFISSIONAL</strong></legend><br>        
                    
                    <p>Inserido no mercado de trabalho: 
                        <span><?php echo $dados['inseridoNoMercado']; ?></span></p><br>
                    <p>Modalidade de emprego: 
                        <span><?php echo $dados['tipoDeEmprego']; ?></span></p><br>
                    <p>Tempo necessário para conseguir atividade remunerada: 
                        <span><?php echo $dados['tempoFormaturaEmprego']; ?></span></p><br>
                    <p>Trabalha na área de formação: 
                        <span><?php echo $dados['trabalhaNaAreaDeFormacao']; ?></span></p><br>
                    <p>Faixa salarial: 
                        <span><?php echo $dados['faixaSalarial']; ?></span></p><br>
                    <p>Há relação entre trabalho e área de formação: 
                        <span><?php echo $dados['relacaoCursoTrabalho']; ?></span></p><br>
                    <p>Orientação para atuar no mercado de trabalho: 
                        <span><?php echo $dados['recebeuOrientacao']; ?></span></p><br>
                    <p>As disciplinas do curso foram úteis para inserção no mercado: 
                        <span><?php echo $dados['disciplinasForamUteis']; ?></span></p><br>
                    <p>O(s) estágio supervisionado teve utilidade para a inserção no mercado:
                        <span><?php echo $dados['estagioContribuiuEmprego']; ?></span></p><br>
                    <p>Descrição da situação profissional: </p>
                        <span><?php echo $dados['resumoSituacaoProfissional']; ?></span>
                    </p><br>
                
                </fieldset>

                <fieldset>
                    
                    <legend><strong>NÍVEL DE SATISFAÇÃO</strong></legend><br>   
                    
                    <p>Satisfação com o curso:
                        <span><?php echo $dados['satisfacaoComCurso']; ?></span></p><br>
                    <p>Resumo da satisfação: </p>
                        <span><?php echo $dados['resumoSatisfacaoComCurso']; ?></span></p><br>
                    <p>Recomendaria o curso para outra pessoa: 
                        <span><?php echo $dados['recomendaCurso']; ?></span></p><br>
                    <p>Justificativa: </p>
                        <span><?php echo $dados['resumoRecomendacaoCurso']; ?></span></p><br>
                
                </fieldset>
                
                <fieldset>
                    
                    <legend><strong>RELAÇÃO COM A UNIVERSIDADE</strong></legend><br>
                    
                    <p>Paticipa de eventos na UFPA: 
                        <span><?php echo $dados['participaDeEventos']; ?></span></p><br>
                    <p>Resumo do(s) evento(s) que participa: </p>
                        <span><?php echo $dados['resumoEventosAtuais']; ?></span></p><br>
                    <p>Participa de projetos na UFPA:
                        <span><?php echo $dados['participaDeProjeto']; ?></span></p><br>
                    <p>Resumo do(s) projeto(s) que participa: </p>
                        <span><?php echo $dados['resumoProjetosAtuais']; ?></span></p><br>
                    <p>Participa de algum curso da UFPA: 
                        <span><?php echo $dados['participaDeCurso']; ?></span></p><br>
                    <p>Resumo do(s) curso(s): </p>
                        <span><?php echo $dados['resumoCursosAtuais']; ?></span></p><br>
                    <p>Atividades que você gostaria de participar: </p>
                        <span><?php echo $dados['resumoAtividadesInteresse']; ?></span></p><br>
                    <p>Sugestão para o questionário: </p>
                        <span><?php echo $dados['resumoSugestaoQuestionario']; ?></span></p><br>
                        
                </fieldset>
            </div>            
        </div>
    </section>
    <!-------------------------- Fim da área de consulta de resposta ------------------------------------>

    <!--------------------------------- InÃ­Â­cio da área do rodapÃ© --------------------------------------->
    <footer>
        <hr>
        <a>Copyright @ 2023 Portal do Egresso da Universidade Federal do Pará</a>
    </footer>
    <!--------------------------------- Fim da área do rodapÃ© --------------------------------------->

</body>

</html>