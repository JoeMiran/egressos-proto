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
    idade, curso, anoIngresso, campus, bolsa, bolsaResumo, inicicaoCientifica, 
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
        '" . $bolsaResumo . "'
        '" . ($iniciacaoCientifica ? "Sim" : "Não") . "'
        '" . ($monitoria ? "Sim" : "Não") . "'
        '" . ($estagioNaoObrigatorio ? "Sim" : "Não") . "'
        '" . ($atividadeComunidade ? "Sim" : "Não") . "'
        '" . ($eventos ? "Sim" : "Não") . "'
        '" . ($empresaJunior ? "Sim" : "Não") . "'
        '" . ($diretorioAcademico ? "Sim" : "Não") . "'
        '" . ($outrasAtividades ? "Sim" : "Não") . "'
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