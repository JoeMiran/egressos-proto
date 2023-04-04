<?php

function getDadosEgressoFromDatabase($cpf = NULL) 
{
    if ($cpf) 
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "egressos";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "select * from egresso where cpf = '" . $cpf . "'";

        if (!$conn) die("Connection failed: " . mysqli_connect_error());
        
        $result = $conn->query($sql)->fetch_assoc();
        
        $conn->close();
        
        return $result;
        
    }
    else return FALSE;

}

function cpfSessionStart() {
    if (isset($_POST['cpf']))
    {
        $cpf = ltrim($_POST['cpf'], '0');
        session_start();
        $_SESSION['cpf'] = $cpf;

    }

}

function getDadosEgressoJson() 
{
    if (isset($_SESSION['cpf']))
    {    
        $queryResult = getDadosEgressoFromDatabase($_SESSION['cpf']);
        if ($queryResult) 
        {
            echo "<meta http-equiv='refresh' content='0;url=consultaResposta.php'>";
            die();
        }
        else 
        {
            $url = 'https://sagitta.ufpa.br/sagitta/ws/discente/' . $_SESSION['cpf'] . '?login=rsantsil';
            $json = json_decode(file_get_contents($url));
            $ultimoAnoIngresso = 0;
            foreach ($json as $matricula) 
            {
                
                if ($matricula->anoIngresso > $ultimoAnoIngresso) 
                {
                    $ultimaMatricula = $matricula;
                    $ultimoAnoIngresso = $matricula->anoIngresso;

                }

            }
        
            if ($ultimaMatricula) 
            {
                $_SESSION['nome'] = $ultimaMatricula->nome;
                $_SESSION['dataNascimento'] = $ultimaMatricula->dataNascimento;
                $_SESSION['anoIngresso'] = $ultimaMatricula->anoIngresso;
                $_SESSION['curso'] = $ultimaMatricula->curso->nome;
                $_SESSION['campus'] = $ultimaMatricula->curso->campus->nome;
                $_SESSION['email'] = $ultimaMatricula->email;
                echo "<meta http-equiv='refresh' content='0;url=formularioEgresso.php'>";
                die();

            }
            else echo 'Egresso não encontrado.';

        }

    }
    
}
