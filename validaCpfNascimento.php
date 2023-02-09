<?php 
include_once 'dadosEgresso.php';
?>

<h1>Informe seu CPF e Data de Nascimento</h1>
	<form action="validaCpfNascimento.php" method="post" name="form">
		<fieldset>
			<label>CPF:</label> <input type= "number" 
				id="cpf" name="cpf" type="text" size="18" 
				alt="Informe seu CPF" title="CPF" required>
			<label>Data de Nascimento:</label> <input id="nascimento" 
				name="nascimento" type="date" size="18" 
				alt="Informe sua Data de Nascimento" title="Data de Nascimento" 
				required>
			<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
				value="Confirmar">
		</fieldset>
	</form>
	<?php getDadosEgressoJson()?>
</div>
