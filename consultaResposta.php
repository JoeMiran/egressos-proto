<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Verificar Credenciais</title>
    </head>
    <body>

        <!-------------------------------- Início da area de cabeçalho ------------------------------------>
        <header>
            <div id="navbar">
                <div class="resp">
                        <h1>
                            <strong>Consulta de Egressos da UFPA</strong>
                        </h1>
                </div>
            </div>   
            
            <div id="barra"> 
                <a href="https://egressos.ufpa.br/">
                    <img class="logo" src="images/logo_ufpa.png">
                </a>
                <button class="return" type="button"><strong><a style="font-size: larger;" class="link" href="validaCpf.php">🢀</a></strong></button>
                </a>
            </div>
        </header>
        <!-------------------------------- Fim da area de cabeçalho ------------------------------------------>   
         
        <!------------------------ Início da área de consulta de resposta ---------------------------------->
        <div id="area-principal">
            <fieldset>
                    <legend><strong>SEUS DADOS CADASTRAIS</strong></legend><br>

                    <?php

                    include_once 'dadosEgresso.php';
                    session_start();

                    $dados = getDadosEgressoFromDatabase($_SESSION['cpf']);

                    echo 'CPF: ' . $dados['cpf'] . '<br><br>';

                    echo 'Nome: ' . $dados['nome'] . '<br><br>';

                    echo 'Data de Nascimento: ' . $dados['dataNascimento'] . '<br><br>';

                    echo 'Email: ' . $dados['email'] . '<br><br>';

                    echo 'Curso: ' . $dados['curso'] . '<br><br>';

                    echo 'Ano de Ingresso: ' . $dados['anoIngresso'] . '<br><br>';

                    echo 'Campus: ' . $dados['campus'] . '<br><br>';

                    echo 'Respostas: <br><br>';

                    echo 'Genero: ' . $dados['genero'] . '<br><br>';

                    echo 'Cor: ' . $dados['cor'] . '<br><br>';

                    echo 'Idade: ' . $dados['idade'] . '<br><br>';

                    echo 'Obteve bolsa durante o curso? <br>' . $dados['bolsa'] . '<br><br>';

                    echo 'Se sim, qual(is)? <br>' . $dados['bolsaResumo'] . '<br><br>';

                    echo 'Participou de atividades acadêmicas extracurriculares durante o curso?<br><br>';

                    echo 'Iniciação Científica <br>' . $dados['iniciacaoCientifica'] . '<br><br>';

                    echo 'Monitoria <br>' . $dados['monitoria'] . '<br><br>';

                    echo 'Estágio Não Obrigatório pertinente ao curso <br>' . $dados['estagioNaoObrigatorio'] . '<br><br>';

                    echo 'Atividade Curricular em Comunidade - ACC <br>' . $dados['atividadeComunidade'] . '<br><br>';

                    echo 'Eventos: Congressos, Seminários, etc <br>' . $dados['eventos'] . '<br><br>';

                    echo 'Empresa Júnior <br>' . $dados['empresaJunior'] . '<br><br>';

                    echo 'Diretório Acadêmico <br>' . $dados['diretorioAcademico'] . '<br><br>';

                    echo 'Outras <br>' . $dados['outrasAtividades'] . '<br><br>';


                    ?>
            </fieldset>
        </div>
        <!-------------------------- Fim da área de consulta de resposta ------------------------------------>

        <!--------------------------------- Início da área do rodapé --------------------------------------->
        <footer>
            <hr>
            <a>Copyright @ 2023 Portal do Egresso da Universidade Federal do Pará</a>
        </footer>
        <!--------------------------------- Fim da área do rodapé --------------------------------------->
    
    </body>
</html>