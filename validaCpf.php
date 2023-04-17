<?php 
include_once 'dadosEgresso.php';

definirDadosSessao();
?>

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
                            <strong>Formulário de Egressos da UFPA</strong>
                        </h1>
                </div>
            </div>   
            
            <div id="barra"> 
                <a href="https://egressos.ufpa.br/">
                    <img class="logo" src="images/Programa_de_Acompanhamento_de_Egressos-removebg-181x106.png">
                </a>
                <button class="return" type="button"><strong><a class="link" href="https://egressos.ufpa.br/">SAIR</a></strong></button>
                </a>
            </div>
        </header>
        <!-------------------------------- Fim da area de cabeçalho ------------------------------------------>   
         
        <!------------------------ Início da area para a confirmação do CPF ---------------------------------->
        <form method="POST" name="form" action="validaCpf.php">
                <div id="borda">
                    <h2><strong>Verificar Credenciais</strong></h2>
                    <div class="elements" >
                        <input class="cpf" placeholder=" Informe seu CPF..." type= "text" id="cpf" name="cpf" type="text" size="18" alt="  Informe seu CPF" title="CPF" required><br><br>
                        <span class="erro">‎</span><br>
						<?php seletorRedirecionamento()?>
                        <br><br>
						<strong> <input class="submeter" type="button" name="botaoConfirmar" id="botaoConfirmar" value="Responder" onclick="return validarCpf(event)"></strong><br>
                    </div>
                </div>
        </form>
        <!-------------------------- Fim da area para a confirmação do CPF ------------------------------------>
		
        <!--------------------- Início do código JavaScrip para tratamento de erro ---------------------------->
        <script>

            function validarCpf(event) {
                event.preventDefault();

                const cpfInput = document.querySelector('.cpf');
                const cpf = cpfInput.value;
				console.log(/^0*$/g.test(cpf));
				console.log(cpfInput);
				console.log(cpf);

                if(cpf.length !== 11 || isNaN(cpf) || /^0*$/.test(cpf)) {
                    const erroCpf = document.querySelector('.erro');
                    erroCpf.textContent = "Insira um CPF válido";
                } else {
					const erroCpf = document.querySelector('.erro');
                    erroCpf.textContent = "‎";
				}
				return false;
            }

        </script>
        <!--------------------- Fim do código JavaScrip para tratamento de erro ---------------------------->

        <!--------------------------------- Início da área do rodapé --------------------------------------->
        <footer>
            <hr>
            <a>Copyright @ 2023 Portal do Egresso da Universidade Federal do Pará</a>
        </footer>
        <!--------------------------------- Fim da área do rodapé --------------------------------------->
    
    </body>
</html>