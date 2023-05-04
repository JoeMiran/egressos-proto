
/******************************************** FORMAÇÃO ******************************************/
const naoInput = document.querySelector('input[value="Não"][value=Não]');
const textarea = document.querySelector('textarea[name=resumoBolsa]');

naoInput.addEventListener('click', function() {
  if (naoInput.checked) {
    textarea.disabled = true;
  }
});


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
