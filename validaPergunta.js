
/******************************************** FORMAÇÃO ******************************************/
function recebeBolsa() {

  let naoInput = document.querySelector('input[name="bolsa"][value="nao"]');
  let textarea = document.querySelector('textarea[name=resumoBolsa]');
  let p = document.querySelector('.dependente p')

  if (naoInput.checked == true) {
    textarea.disabled = true;
    textarea.style.opacity = 0.5;
    p.classList.add('desabilitado');
  } else {
    textarea.disabled = false;
    p.classList.remove('desabilitado');
  }
}

/************************************** DADOS COMPLEMENTARES *************************************/

function posGraduacao() {
  let select = document.getElementById('cursoPosGraduacao');
  let statusInputs = document.querySelectorAll('input[name = situacaoCursoPosGraduacao], input[name = posGraduacaoUfpa]')
  let labels = document.querySelectorAll('.dependente1 label, .dependente1 p')

  statusInputs.forEach( input => {
    if(select.value == "Nenhum") {
      input.disabled = true;
    } else {
      input.disabled = false;
    }
    
  });

  labels.forEach(label => {
    if (select.value == "Nenhum") {
      label.classList.add('desabilitado1');
    } else {
      label.classList.remove('desabilitado1');
    }
  });

}

/****************************************** SITUAÇÃO PROFISSIONAL  ****************************************/

function trabalho(empregado) {
  let inputs = document.querySelectorAll('input[name=tipoDeEmprego], input[name=tempoFormaturaEmprego], input[name=trabalhaNaAreaDeFormacao], input[name=faixaSalarial], input[name=relacaoCursoTrabalho], input[name=disciplinasForamUteis], input[name=estagioContribuiuEmprego]');
  let labels = document.querySelectorAll('.dependente2 label, .dependente2 p')
  
  inputs.forEach(input => {
    if (empregado === 'sim') {
      input.disabled = false;
    } else {
      input.disabled = true;
    }
  });

  labels.forEach(label => {
    if (empregado === 'nao') {
      label.classList.add('desabilitado2');
    } else {
      label.classList.remove('desabilitado2');
    }
  });
}

/************************************* RELAÇÃO ATUAL COM A UNIVERSIDADE *************************************/

function eventos() {

  let participa = document.querySelector('input[name="participaDeEventos"][value="nao"]');
  let textarea = document.querySelector('textarea[name=resumoEventosAtuais]');
  let p = document.querySelector('.dependente3 p');

  if (participa.checked == true) {
    textarea.disabled = true;
    textarea.style.opacity = 0.5;
    p.classList.add('desabilitado3');
  } else {
    textarea.disabled = false;
    p.classList.remove('desabilitado3');
  }
}

function grupoPesquisa() {

  let projeto = document.querySelector('input[name="participaDeProjeto"][value="nao"]');
  let textarea = document.querySelector('textarea[name=resumoProjetosAtuais]');
  let p = document.querySelector('.dependente4 p');

  if (projeto.checked == true) {
    textarea.disabled = true;
    textarea.style.opacity = 0.5;
    p.classList.add('desabilitado4');
  } else {
    textarea.disabled = false;
    p.classList.remove('desabilitado4');
  }
}

function curso() {

  let curso = document.querySelector('input[name="participaDeCurso"][value="nao"]');
  let textarea = document.querySelector('textarea[name=resumoCursosAtuais]');
  let p = document.querySelector('.dependente5 p');

  if (curso.checked == true) {
    textarea.disabled = true;
    textarea.style.opacity = 0.5;
    p.classList.add('desabilitado5');
  } else {
    textarea.disabled = false;
    p.classList.remove('desabilitado5');
  }

}
