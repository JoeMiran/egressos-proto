<?php

if (isset($_POST['botaoConfirmar'])) {
    session_start();
    extract($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "egressos";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "insert into egresso 
    (
        cpf, 
        nome, 
        email, 
        dataNascimento, 
        idade, 
        genero, 
        cor, 
        curso, 
        anoIngresso, 
        campus, 
        bolsa, 
        resumoBolsa, 
        atividadesExtracurriculares,
        atividadeRemunerada,
        cursoPosGraduacao,
        situacaoCursoPosGraduacao,
        posGraduacaoUfpa,
        inseridoNoMercado,
        tipoDeEmprego,
        tempoFormaturaEmprego,
        trabalhaNaAreaDeFormacao,
        faixaSalarial,
        relacaoCursoTrabalho,
        recebeuOrientacao,
        disciplinasForamUteis,
        estagioContribuiuEmprego,
        resumoSituacaoProfissional,
        satisfacaoComCurso,
        resumoSatisfacaoComCurso,
        recomendaCurso,
        resumoRecomendacaoCurso,
        participaDeEventos,
        resumoEventosAtuais,
        participaDeProjeto,
        resumoProjetosAtuais,
        participaDeCurso,
        resumoCursosAtuais,
        resumoAtividadesInteresse,
        resumoSugestaoQuestionario
    ) values 
    (
        '" . $_SESSION['cpf'] . "', 
        '" . $_SESSION['nome'] . "', 
        '" . $_SESSION['email'] . "',
        '" . $_SESSION['dataNascimento'] . "', 
        '" . $_SESSION['idade'] . "', 
        '" . $genero . "',
        '" . $cor . "', 
        '" . $_SESSION['curso'] . "', 
        '" . $_SESSION['anoIngresso'] . "', 
        '" . $_SESSION['campus'] . "', 
        '" . $bolsa . "',
        '" . $resumoBolsa . "',
        '" . (
                (isset($iniciacaoCientifica) ? "Inicia��o Cient�fica; " : "")
                . (isset($monitoria) ? "Monitoria; " : "")
                . (isset($estagioNaoObrigatorio) ? "Est�gio N�o Obrigat�rio pertinente ao curso; " : "")
                . (isset($atividadeComunidade) ? "Atividade Curricular em Comunidade - ACC; " : "")
                . (isset($participouDeEventos) ? "Eventos: Congressos, Semin�rios, etc; " : "")
                . (isset($empresaJunior) ? "Empresa J�nior; " : "")
                . (isset($diretorioAcademico) ? "Diret�rio Acad�mico; " : "")
                . (isset($outrasAtividades) ? "Outras Atividades; " : "")
            ) . "',
        '" . $atividadeRemunerada . "',
        '" . $cursoPosGraduacao . "',
        '" . ($cursoPosGraduacao == "Nenhum" ? "" : $situacaoCursoPosGraduacao) . "',
        '" . ($cursoPosGraduacao == "Nenhum" ? "" : $posGraduacaoUfpa) . "',
        '" . $inseridoNoMercado . "',
        '" . ($inseridoNoMercado == "N�o" ? "" : $tipoDeEmprego) . "',
        '" . ($inseridoNoMercado == "N�o" ? "" : $tempoFormaturaEmprego) . "',
        '" . ($inseridoNoMercado == "N�o" ? "" : $trabalhaNaAreaDeFormacao) . "',
        '" . ($inseridoNoMercado == "N�o" ? "" : $faixaSalarial) . "',
        '" . ($inseridoNoMercado == "N�o" ? "" : $relacaoCursoTrabalho) . "',
        '" . ($inseridoNoMercado == "N�o" ? "" : $recebeuOrientacao) . "',
        '" . ($inseridoNoMercado == "N�o" ? "" : $disciplinasForamUteis) . "',
        '" . ($inseridoNoMercado == "N�o" ? "" : $estagioContribuiuEmprego) . "',
        '" . $resumoSituacaoProfissional . "',
        '" . $satisfacaoComCurso . "',
        '" . $resumoSatisfacaoComCurso . "',
        '" . $recomendaCurso . "',
        '" . $resumoRecomendacaoCurso . "',
        '" . $participaDeEventos . "',
        '" . ($participaDeEventos == "N�o" ? "" : $resumoEventosAtuais) . "',
        '" . $participaDeProjeto . "',
        '" . ($participaDeProjeto == "N�o" ? "" : $resumoProjetosAtuais) . "',
        '" . $participaDeCurso . "',
        '" . ($participaDeCurso == "N�o" ? "" : $resumoCursosAtuais) . "',
        '" . $resumoAtividadesInteresse . "',
        '" . $resumoSugestaoQuestionario . "'
    );";
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($conn->query($sql) === TRUE) {
        echo "<meta http-equiv='refresh' content='0;url=consultaResposta.php'>";
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    if ($conn->query($sql) === TRUE) {
        echo "<meta http-equiv='refresh' content='0;url=consultaResposta.php'>";
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>