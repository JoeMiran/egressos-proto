<?php

function getDadosEgressoJson(){
    try{
        if(isset($_POST['botaoConfirmar'])){
            extract($_POST);
            $cpf=ltrim($cpf, '0');
            $json=json_decode(file_get_contents('https://sagitta.ufpa.br/sagitta/ws/discente/'.$cpf.'?login=rsantsil'));
            if($json){
                session_start();
                $_SESSION['cpf'] = $cpf;
                $_SESSION['nome'] = $json[0]->nome;
                echo "<meta http-equiv='refresh' content='0;url=formularioEgresso.php'>";
                die();
            }else{
                echo 'Egresso não encontrado.';
            }
        }
    }catch(Exception $e){
        echo $e->getTraceAsString();
        throw $e;
    }
}