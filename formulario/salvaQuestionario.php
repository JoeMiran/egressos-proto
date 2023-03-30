<?php
include_once 'dadosEgresso.php';
    if (isset($_POST['cpf'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "egressos";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $id = $_POST['id'];
		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$dataNascimento = $_POST['dataNascimento'];
        $anoIngresso = $POST['anoIngresso'];
        $curso = $_POST['curso'];
        $capus = $_POST['campus'];
        $email = $_POST['email'];
		$cor = $_POST['cor'];
        $sql = "insert into egresso (id,cpf) values ('" . $id . ',' . $cpf ."' );";

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if ($conn->query($sql) === TRUE) {
            echo "Questionário salvo com sucesso!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>