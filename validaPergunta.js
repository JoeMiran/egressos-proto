
/******************************************** FORMAÇÃO ******************************************/



/************************************* SITUAÇÃO PROFISSIONAL *************************************/

function trabalho(pergunta) {
  let inputs = document.querySelectorAll('input[name=tipoDeEmprego], input[name=tempoFormaturaEmprego], input[name=trabalhaNaAreaDeFormacao], input[name=faixaSalarial], input[name=relacaoCursoTrabalho], input[name=disciplinasForamUteis], input[name=estagioContribuiuEmprego]');

  inputs.forEach(function(input) {
    if (pergunta === 'sim') {
      input.disabled = false;
      input.a
    } else {
      input.disabled = true;
    }
  });
}
