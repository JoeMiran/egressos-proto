<html>
    <head>
        <meta charset="UTF-8">
        <title>Questionário do Egresso - 1/2</title>
    </head>
    <?php
    if (isset($_POST['cpf'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "egressos";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $cpf = $_POST['cpf'];
        $sql = "insert into egresso (cpf) values ('" . $cpf . "');";

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
    <body>
        <form action="index2.php" method="POST">
            <input name="cpf" type="text" placeholder="Digite o CPF"/>
            <input type="submit" value="Respoder Questionário"> 
        </form>
    </body>
</html>