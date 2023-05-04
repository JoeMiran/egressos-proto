function naoTrabalha(pergunta) {

  let inputs = document.querySelectorAll(
      'input[name=tipoDeEmprego], input[name=tempoFormaturaEmprego], input[name=trabalhaNaAreaDeFormacao], input[name=faixaSalarial], input[name=relacaoCursoTrabalho], input[name=disciplinasForamUteis], input[name=estagioContribuiuEmprego]');

  inputs.forEach(function(input) {
    if (pergunta === 'nao') {
      input.disabled = true;
    } else {
      input.disabled = false;
    }
  });
}

function trabalha(pergunta) {
  let inputs = document.querySelectorAll(
    'input[name=tipoDeEmprego], input[name=tempoFormaturaEmprego], input[name=trabalhaNaAreaDeFormacao], input[name=faixaSalarial], input[name=relacaoCursoTrabalho], input[name=disciplinasForamUteis], input[name=estagioContribuiuEmprego]');

inputs.forEach(function(input) {
  if (pergunta === 'sim') {
    input.disabled = false;
  } else {
    input.disabled = true;
  }
});
}