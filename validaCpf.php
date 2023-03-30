<?php 
include_once 'dadosEgresso.php';
?>

<h1>Informe seu CPF</h1>
	<form action="validaCpf.php" method="post" name="form">
		<fieldset>
			<label>CPF:</label> <input type= "number" 
				id="cpf" name="cpf" type="text" size="18" 
				alt="Informe seu CPF" title="CPF" required>
			<input type="submit" name="botaoConfirmar" id="botaoConfirmar" 
				value="Responder QuestionárioA">
		</fieldset>
	</form>
	<?php getDadosEgressoJson()?>
</div>
