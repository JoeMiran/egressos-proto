<?php
include_once 'ActionAluno.php';
include_once 'WebService.php';


class ControllerAluno extends AbstractController {
	public function getAction() {
		if ($this->isNullAction ())
			$this->action = new ActionAluno ();
		
		return $this->action;
	}
	public function totalAlunos() {
		return $this->getAction ()->getTotalAlunos ();
	}

	public function verificaAlunoPeloCodigo(IRequest $request) {
		if ($request->isElement ( 'codigo' )) {
			$aluno = $this->getAction ()->getByCodigo ( $request->get ( 'codigo' ) );
			
			if ($aluno)
				return $aluno;
			else
				Navigation::goToBackAlert ( 'Aluno inexistente' );
		} else
			Navigation::goToBackAlert ( 'Aluno inexistente' );
	}
	public function verificaAlunoParaEncaminhamento(IRequest $request) {
		if ($request->isElement ( 'BuscarContratoAluno' )) {
			$validator = new Validator ( $request );
			$validator->addRule ( 'cpf', 'CPF', 'required;number;' );
			
			try {
				$validator->validate ();
				
				$aluno = $this->getAction ()->getAlunoPorMatricula ( $request->get ( 'cpf' ) );
				
				if ($aluno)
					Navigation::goToAction ( new Page ( 'visualizarEncaminhamentosDoAluno&codigo=' . $aluno->getCodigo () ) );
				else
					BoxMessage::error ( 'O aluno nгo possui cadastro na Central de Estбgio' );
			} catch ( ValidatorException $e ) {
				$validator->showErrors ();
			}
		}
	}
	
	// USES

	public function cadastraAlunoUsuario(IRequest $request) {
	    
		if ($request->isElement ( 'CadastroAluno' )) {
	       //OUT #625
		    if ($request->isElementNotNull('matricula')) {
				//TRACK #44
				$validator = new Validator ( $request );
				$validator->addRule ( 'endereco', 'Endereзo', 'required;' );
				$validator->addRule ( 'cidade', 'Cidade', 'required;' );
				$validator->addRule ( 'bairro', 'Bairro', 'required;' );
				$validator->addRule ( 'fone2', 'Celular', 'required;' );

				
				$validator->addRule ( 'email', 'Email', 'required;email;' );
				$validator->addRule ( 'confirmaEmail', 'Confirmaзгo de Email', 'equals(email);' );
					
				$validator->addRule ( 'senha', 'Senha', 'required;min(6);max(20);' );
				$validator->addRule ( 'confirmaSenha', 'Confirmaзгo de Senha', 'equals(senha);' );
				$validator->addRule('cpf', 'CPF', 'required');
				if ($request->get('idCurso')){
					$controllerCurso = new ControllerCurso();
					$curso = $controllerCurso->getCurso($request);
					$request->add('curso', $curso->getCodigoSigaa());
				}
				if ($validator->isValid ()) {
					$actionUsuario = new ActionUsuario();
					$usuarioExistente = $actionUsuario->getUsuarioByLogin($request->get('email'));
					if ($usuarioExistente) {
						return Navigation::sendLocationAlert('cadastroAluno2', 'Email jб cadastrado.');
					}

					$request->add ( 'dataCadastro', Date::today () );
					if ($this->getAction ()->cadastrarAlunoUsuario ( $request )) {
						Navigation::goToAction ( new Page ( 'login&perfil=' . Perfil::ALUNO, 'aluno.cadastro.sucesso' ) );
					} else
						Navigation::goToAction ( new Page ( 'cadastroAluno2', 'createFail', 'Aluno' ) );
				}
					
				$validator->showErrors ();
			} else  Navigation::goToAction ( new Page ( 'cadastroAluno2', 'createFail', 'Aluno' ) );
				
		}
	}
			
	/**
	 *
	 * @return Aluno
	 */
	public function getAlunoDaSession() {
		return $this->getAction ()->getByCodigo ( Session::get ( 'codigo' ) );
	}
    //TRACK #44
	public function getDadosAlunoJson(){
		try{
			if(isset($_POST['botaoIdentificar']))
			{

				$request = new Request();
                
				$url = 'https://sagitta.ufpa.br/sagitta/ws/centralestagio/';
				$login = '?login=diegolisboa';
				
				$isMatricula = $this->getAction()->getAlunoPorMatriculaECpf($request);
					
				if (empty($isMatricula))
				{
					Session::start();
					ini_set('default_socket_timeout', 10000);
					$json = file_get_contents($url.$request->get('cpf').$login);
					$dadosAluno = json_decode($json);
					
					if(Session::get('nome')){
					    unset($_SESSION["nome"]);
					    unset($_SESSION["matricula"]);
					    unset($_SESSION["dataNascimento"]);
					    unset($_SESSION["curso"]);
					    unset($_SESSION["cpf"]);
					    unset($_SESSION["semestre"]);
					    unset($_SESSION["codigoCurso"]);
					}
					
					if (!empty($dadosAluno)) 
					{
					    $contadorCpf = strlen($dadosAluno[0]->cpf);
					    	
					    $cpf = $this->completeCpf($contadorCpf, $dadosAluno[0]->cpf);
					    	
					    //OUT #518
					    $isCpf = $this->getAction()->getAlunoPorCpf($cpf);
					    
					    if (!$isCpf)
					    {
					        Session::set('nome',$dadosAluno[0]->nome);
					        Session::set('matricula',$dadosAluno[0]->matricula);
					        Session::set('dataNascimento',$dadosAluno[0]->dataNascimento);
					        Session::set('curso',$dadosAluno[0]->curso);
					    
					        Session::set('cpf',$cpf);
					    
					        Session::set('semestre',$dadosAluno[0]->periodoAtual);
					        Session::set('codigoCurso',$dadosAluno[0]->codCurso);
					        	
					        if($request->get('matricula') == $dadosAluno[0]->matricula && $request->get('cpf') == $cpf)
				                Navigation::goToAction(new Page('cadastroAluno2&matricula='.$request->get('matricula')));
					        else BoxMessage::error('CPF nгo confere com matrнcula', 500);
					   
					    } else BoxMessage::inform('Aluno '.$isCpf->nome. ' jб estб cadastrado', 500);
					} elseif ($_SESSION['perfil'] == Perfil::ADMINISTRADOR){
					    Navigation::goToAction(new Page('cadastroAluno2&matricula='.$request->get('matricula')));
					} else BoxMessage::error('Dados invбlidos', 500);
						
				} 	 else BoxMessage::inform('Aluno '.$isMatricula->nome. ' jб estб cadastrado', 500);
			}
		} catch ( ValidatorException $error ) {
				$validator->showErrors ();
		}
	}
	
	//OUT #534
	public function completeCpf($contador,$cpf)
	{
		switch ($contador)
		{
			case "10" : return '0'.$cpf;
			case "9" : return '00'.$cpf;
			case "8" : return '000'.$cpf;
			default: return $cpf;
		}
	
	}

	
}

?>