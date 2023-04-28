// function seletorPergunta() {
//     let inseridoNoMercado = document.querySelector('input[name="inseridoNoMercado"]');
//     let descartar = document.getElementsById("descartar").querySelectorAll('input[type="radio"]');
    
//     inseridoNoMercado.addEventListener('change', function() {
//         if(this.value === 'sim') {
//             descartar.forEach(function(pergunta) {
//                 pergunta.disabled = false;
//             });
//             document.getElementById('descartar').disabled = false;
//         } else {
//             perguntasDependentes.forEach(function(pergunta) {
//                 if (pergunta.checked === false) {
//                   pergunta.disabled = true;
//                 }
//             });
//             document.getElementById('descartar').disabled = true;
//         }
//     });
// }

function envioSucesso(event) {
    var campos = document.querySelectorAll('textarea');
    var selects = document.querySelectorAll('select');
    var radioDivs = document.querySelectorAll('.radio');
    var todosPreenchidos = true;
    
    radioDivs.forEach( 
        function(divNode) {
            respondido = false;
            divNode.childNodes.forEach(
                function(radioNode) {
                    if (radioNode.checked) {
                        respondido = true;
                    }
                }
            )
            if (respondido == false) {
                var pergunta = divNode.parentNode.textContent;
                divNode.previousElementSibling.classList.add('obrigatorio');
            } else {
                divNode.previousElementSibling.classList.remove('obrigatorio');
            }
        }
    )

    for (const campo of campos) {

        if (campo.value.length === 0) {
            campo.classList.add('nao_preenchido');
            todosPreenchidos = false;
        } else {
            campo.classList.remove('nao_preenchido');
        }
    }
    for (const select of selects) {

        if (select.selectedIndex === 0) {
            select.classList.add('select_vazio');
            todosPreenchidos = false;
        } else {
            select.classList.remove('select_vazio');
        }
    }
    if (!todosPreenchidos) {
        event.preventDefault();
        alert('Por favor, responda todas as perguntas.');
    }
}