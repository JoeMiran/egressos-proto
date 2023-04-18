<?php

include_once 'dadosEgresso.php';
session_start();
$dados = getDadosEgressoFromDatabase($_SESSION['cpf']);

?>

<?php echo $dados['cpf'];?>
<?php echo $dados['nome'];?>
<?php echo $dados['email'];?>
<?php echo $dados['dataNascimento'];?>
<?php echo $dados['idade'];?>
<?php echo $dados['genero'];?>
<?php echo $dados['cor'];?>
<?php echo $dados['curso'];?>
<?php echo $dados['anoIngresso'];?>
<?php echo $dados['campus'];?>
<?php echo $dados['bolsa'];?>
<?php echo $dados['resumoBolsa'];?>
<?php echo $dados['atividadesExtracurriculares'];?>
<?php echo $dados['atividadeRemunerada'];?>
<?php echo $dados['cursoPosGraduacao'];?>
<?php echo $dados['situacaoCursoPosGraduacao'];?>
<?php echo $dados['posGraduacaoUfpa'];?>
<?php echo $dados['inseridoNoMercado'];?>
<?php echo $dados['tipoDeEmprego'];?>
<?php echo $dados['tempoFormaturaEmprego'];?>
<?php echo $dados['trabalhaNaAreaDeFormacao'];?>
<?php echo $dados['faixaSalarial'];?>
<?php echo $dados['relacaoCursoTrabalho'];?>
<?php echo $dados['recebeuOrientacao'];?>
<?php echo $dados['disciplinasForamUteis'];?>
<?php echo $dados['estagioContribuiuEmprego'];?>
<?php echo $dados['resumoSituacaoProfissional'];?>
<?php echo $dados['satisfacaoComCurso'];?>
<?php echo $dados['resumoSatisfacaoComCurso'];?>
<?php echo $dados['recomendaCurso'];?>
<?php echo $dados['resumoRecomendacaoCurso'];?>
<?php echo $dados['participaDeEventos'];?>
<?php echo $dados['resumoEventosAtuais'];?>
<?php echo $dados['participaDeProjeto'];?>
<?php echo $dados['resumoProjetosAtuais'];?>
<?php echo $dados['participaDeCurso'];?>
<?php echo $dados['resumoCursosAtuais'];?>
<?php echo $dados['resumoAtividadesInteresse'];?>
<?php echo $dados['resumoSugestaoQuestionario'];?>