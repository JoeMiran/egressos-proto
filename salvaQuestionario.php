<?php

if (isset($_POST['botaoConfirmar'])) {
    session_start();
    extract($_POST);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "egressos";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "insert into egresso (cpf, nome, dataNascimento, email, genero, cor, 
    idade, curso, anoIngresso, campus, bolsa, bolsaResumo, iniciacaoCientifica, 
    monitoria, estagioNaoObrigatorio, atividadeComunidade, eventos, 
    empresaJunior, diretorioAcademico, outrasAtividades) values 
    (
        '" . $_SESSION['cpf'] . "', 
        '" . $_SESSION['nome'] . "', 
        '" . $_SESSION['dataNascimento'] . "', 
        '" . $_SESSION['email'] . "',
        '" . $genero . "',
        '" . $cor . "', 
        '" . $_SESSION['idade'] . "', 
        '" . $_SESSION['curso'] . "', 
        '" . $_SESSION['anoIngresso'] . "', 
        '" . $_SESSION['campus'] . "', 
        '" . $bolsa . "',
        '" . $bolsaResumo . "',
        '" . (isset($iniciacaoCientifica) ? "Sim" : "Não") . "',
        '" . (isset($monitoria) ? "Sim" : "Não") . "',
        '" . (isset($estagioNaoObrigatorio) ? "Sim" : "Não") . "',
        '" . (isset($atividadeComunidade) ? "Sim" : "Não") . "',
        '" . (isset($eventos) ? "Sim" : "Não") . "',
        '" . (isset($empresaJunior) ? "Sim" : "Não") . "',
        '" . (isset($diretorioAcademico) ? "Sim" : "Não") . "',
        '" . (isset($outrasAtividades) ? "Sim" : "Não") . "'
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