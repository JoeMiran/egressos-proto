<h2 class="mt-3 mb-3">Questionário do Egresso - 1/2</h2>
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header text-white fw-bold bg-success text-center"> Autenticação </div>
			<div class="card-body">
				
				<form action="?action=cadastroAluno" method="post" name="form">

					<fieldset>
						
				
						<label>Matricula:</label> <input id="matricula" name="matricula"
							type="text" size="18" maxlength="12" alt="Informe a sua Matricula"
							title="Matrícula" validate="required;min(11);" />
							
						<label>CPF:</label> <input id="cpf" name="cpf"
							type="text" size="18" maxlength="11" alt="Informe seu CPF"
							title="CPF" validate="required;cpf;" />
				
						<div class="groupButton">
							<input class="btn" type="submit" name="botaoIdentificar"
								id="botaoIdentificar" value="Identificar"/>
						</div>
				
					</fieldset>
				
				</form>
			</div>
		</div>
	</div>

</div>



<script type="text/javascript" src="../styles/js/Validate.js"></script>
<script type="text/javascript" src="../styles/js/Util.js"></script>
<script type="text/javascript" src="../styles/js/inicio/cadastroAluno.js"></script>