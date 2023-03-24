<?php 
include_once 'dadosEgresso.php';
?>

<h1>Informe seu CPF e Data de Nascimento</h1>
	<form action="validaCpfNascimento.php" method="post" name="form">
		<fieldset>
			<label>CPF:</label> <input type= "number" 
				id="cpf" name="cpf" type="text" size="18" 
				alt="Informe seu CPF" title="CPF" required>
			<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
				value="Confirmar">
		</fieldset>
	</form>
	<?php getDadosEgressoJson()?>
</div>
