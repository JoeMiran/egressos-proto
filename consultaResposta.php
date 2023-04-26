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

    <!-------------------------------- InÃ­cio da area de cabeçalho ------------------------------------>
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
            <button class="return" type="button"><strong><a style="font-size: larger;" class="link" href="validaCpf.php">ðŸ¢€</a></strong></button>
            </a>
        </div>
    </header>
    <!-------------------------------- Fim da area de cabeçalho ------------------------------------------>

    <!------------------------ Iní­cio da área de consulta de resposta ---------------------------------->
    <div id="area-principal">
        <fieldset>
            <legend><strong>SEUS DADOS CADASTRAIS</strong></legend><br>
           
            <div class="consulta">
                <p>CPF: <?php echo $dados['cpf']; ?></p><br>
                <p>Nome: <?php echo $dados['nome']; ?></p><br>
                <p>Email: <?php echo $dados['email']; ?></p><br>
                <p>Data de Nascimento: <?php echo $dados['dataNascimento']; ?></p><br>
                <p>Idade: <?php echo $dados['idade']; ?></p><br>
                <p>Genero: <?php echo $dados['genero']; ?></p><br>
                <p>Cor: <?php echo $dados['cor']; ?></p><br>
                <p>Curso: <?php echo $dados['curso']; ?></p><br>
                <p>Ano de Ingresso: <?php echo $dados['anoIngresso']; ?></p><br>
                <p>Campus: <?php echo $dados['campus']; ?></p><br>
                <p>Obteve bolsa durante o curso?: <?php echo $dados['bolsa']; ?></p><br>
                <p><?php echo $dados['resumoBolsa']; ?></p><br>
                <p>Participou de atividades acadêmicas extracurriculares durante o curso?
                    <?php echo $dados['atividadesExtracurriculares']; ?></p><br>
                <p>Durante o curso, você desenvolveu atividade remunerada fora da Universidade?
                    <?php echo $dados['atividadeRemunerada']; ?></p><br>
                <p>Curso de Pós-Graduação: <?php echo $dados['cursoPosGraduacao']; ?></p><br>
                <p>Situação do curso: <?php echo $dados['situacaoCursoPosGraduacao']; ?></p><br>
                <p>posGraduacaoUfpa: <?php echo $dados['posGraduacaoUfpa']; ?></p><br>
                <p>Atualmente está inserido no mercado de trabalho? <?php echo $dados['inseridoNoMercado']; ?></p><br>
                <p>Tipo de emprego: <?php echo $dados['tipoDeEmprego']; ?></p><br>
                <p>tempoFormaturaEmprego: <?php echo $dados['tempoFormaturaEmprego']; ?></p><br>
                <p>Trabalha na área de formação? <?php echo $dados['trabalhaNaAreaDeFormacao']; ?></p><br>
                <p>Faixa salarial: <?php echo $dados['faixaSalarial']; ?></p><br>
                <p>Há relação entre seu trabalho e sua formação? <?php echo $dados['relacaoCursoTrabalho']; ?></p><br>
                <p>recebeuOrientacao: <?php echo $dados['recebeuOrientacao']; ?></p><br>
                <p>disciplinasForamUteis: <?php echo $dados['disciplinasForamUteis']; ?></p><br>
                <p>estagioContribuiuEmprego: <?php echo $dados['estagioContribuiuEmprego']; ?></p><br>
                <p>resumoSituacaoProfissional: <?php echo $dados['resumoSituacaoProfissional']; ?></p><br>
                <p>satisfacaoComCurso: <?php echo $dados['satisfacaoComCurso']; ?></p><br>
                <p>resumoSatisfacaoComCurso: <?php echo $dados['resumoSatisfacaoComCurso']; ?></p><br>
                <p>recomendaCurso: <?php echo $dados['recomendaCurso']; ?></p><br>
                <p>resumoRecomendacaoCurso: <?php echo $dados['resumoRecomendacaoCurso']; ?></p><br>
                <p>participaDeEventos: <?php echo $dados['participaDeEventos']; ?></p><br>
                <p>resumoEventosAtuais: <?php echo $dados['resumoEventosAtuais']; ?></p><br>
                <p>participaDeProjeto: <?php echo $dados['participaDeProjeto']; ?></p><br>
                <p>resumoProjetosAtuais: <?php echo $dados['resumoProjetosAtuais']; ?></p><br>
                <p>participaDeCurso: <?php echo $dados['participaDeCurso']; ?></p><br>
                <p>resumoCursosAtuais: <?php echo $dados['resumoCursosAtuais']; ?></p><br>
                <p>resumoAtividadesInteresse: <?php echo $dados['resumoAtividadesInteresse']; ?></p><br>
                <p>resumoSugestaoQuestionario: <?php echo $dados['resumoSugestaoQuestionario']; ?></p><br>
            </div>
        </fieldset>
    </div>
    <!-------------------------- Fim da área de consulta de resposta ------------------------------------>

    <!--------------------------------- Iní­cio da área do rodapé --------------------------------------->
    <footer>
        <hr>
        <a>Copyright @ 2023 Portal do Egresso da Universidade Federal do ParÃ¡</a>
    </footer>
    <!--------------------------------- Fim da área do rodapé --------------------------------------->

</body>

</html>