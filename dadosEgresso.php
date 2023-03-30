<?php

function getDadosEgressoJson(){
    try {
        if (isset($_POST['botaoConfirmar'])){
            extract($_POST);
            $cpf = ltrim($cpf, '0');
            $url = 'https://sagitta.ufpa.br/sagitta/ws/discente/' . $cpf . '?login=rsantsil';
            $json = json_decode(file_get_contents($url));
            
            $ultimoAnoIngresso = 0;
            foreach ($json as $matricula) {
                if ($matricula->anoIngresso > $ultimoAnoIngresso) {
                    $ultimaMatricula = $matricula;
                    $ultimoAnoIngresso = $matricula->anoIngresso;
                }
           
            }
            
            if ($ultimaMatricula) {
                session_start();
                $_SESSION['cpf'] = $cpf;
                $_SESSION['nome'] = $ultimaMatricula->nome;
                $_SESSION['dataNascimento'] = $ultimaMatricula->dataNascimento;
                $_SESSION['anoIngresso'] = $ultimaMatricula->anoIngresso;
                echo "<meta http-equiv='refresh' content='0;url=formularioEgresso.php'>";
                die();

            } else {
                echo 'Egresso não encontrado.';

            }
        }
    } catch(Exception $e){
        echo $e->getTraceAsString();
        throw $e;
    }
}