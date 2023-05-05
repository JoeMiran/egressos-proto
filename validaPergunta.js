
/******************************************** FORMAÇÃO ******************************************/
function recebeBolsa() {

  let naoInput = document.querySelector('input[name="bolsa"][value="nao"]');
  let textarea = document.querySelector('textarea[name=resumoBolsa]');
  let p = document.querySelector('.dependente p')

  if (naoInput.checked == true) {
    textarea.disabled = true;
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
  let labels = document.querySelectorAll('.dependente label, .dependente p')

  statusInputs.forEach( input => {
    if(select.value == "Nenhum") {
      input.disabled = true;
    } else {
      input.disabled = false;
    }
    
  });

  labels.forEach(label => {
    if (empregado === 'nao') {
      label.classList.add('desabilitado');
    } else {
      label.classList.remove('desabilitado');
    }
  });

}

/************************************* SITUAÇÃO PROFISSIONAL *************************************/

function trabalho(empregado) {
  let inputs = document.querySelectorAll('input[name=tipoDeEmprego], input[name=tempoFormaturaEmprego], input[name=trabalhaNaAreaDeFormacao], input[name=faixaSalarial], input[name=relacaoCursoTrabalho], input[name=disciplinasForamUteis], input[name=estagioContribuiuEmprego]');
  let labels = document.querySelectorAll('.dependente label, .dependente p')
  
  inputs.forEach(input => {
    if (empregado === 'sim') {
      input.disabled = false;
    } else {
      input.disabled = true;
    }
  });

  labels.forEach(label => {
    if (empregado === 'nao') {
      label.classList.add('desabilitado');
    } else {
      label.classList.remove('desabilitado');
    }
  });
}
