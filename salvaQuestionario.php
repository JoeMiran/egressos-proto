<?php
session_start();
    if (isset($_POST['cor'])) {
        extract($_POST);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "egressos";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "insert into egresso (cor, cpf, nome, dataNascimento, 
        anoIngresso, curso, idade, campus, email, genero) values ('" . $cor . "', 
        '" . $_SESSION['cpf'] . "', '" . $_SESSION['nome'] . "', 
        '" . $_SESSION['dataNascimento'] . "', 
        '" . $_SESSION['anoIngresso'] . "', 
        '" . $_SESSION['curso'] . "', 
        '" . $idade . "', 
        '" . $_SESSION['campus'] . "', '" . $_SESSION['email'] . "'
        , '" . $genero . "');";
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
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