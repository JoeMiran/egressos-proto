<?php

public function getDadosAlunoJson(){
		try{
			if(isset($_POST['botaoIdentificar']))
			{

				$request = new Request();
                
				$url = 'https://sagitta.ufpa.br/sagitta/ws/discente/';
				$login = '?login=rsantsil';
				
				$isMatricula = $this->getAction()->getAlunoPorMatriculaECpf($request);
					
				if (empty($isMatricula))
				{
					Session::start();
					ini_set('default_socket_timeout', 10000);
					$json = file_get_contents($url.$request->get('matricula').$login);
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
					        else BoxMessage::error('CPF não confere com matrícula', 500);
					   
					    } else BoxMessage::inform('Aluno '.$isCpf->nome. ' já está cadastrado', 500);
					} elseif ($_SESSION['perfil'] == Perfil::ADMINISTRADOR){
					    Navigation::goToAction(new Page('cadastroAluno2&matricula='.$request->get('matricula')));
					} else BoxMessage::error('Dados inválidos', 500);
						
				} 	 else BoxMessage::inform('Aluno '.$isMatricula->nome. ' já está cadastrado', 500);
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
?>