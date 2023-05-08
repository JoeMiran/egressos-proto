function envioSucesso(event) {
    var campos = document.querySelectorAll('textarea');
    var selects = document.querySelectorAll('select');
    var radioDivs = document.querySelectorAll('.radio');
    var todosPreenchidos = true;
    
    radioDivs.forEach(function(divNode) {
        var respondido = false;
        divNode.childNodes.forEach(function(radioNode) {
            if (radioNode.checked && !radioNode.disabled) {
                respondido = true;
            }
        });
        if (!respondido) {
            divNode.previousElementSibling.classList.add('obrigatorio');
            todosPreenchidos = false;
        } else {
            divNode.previousElementSibling.classList.remove('obrigatorio');
        }
    });

    for (const campo of campos) {

        if (campo.value.length === 0 && campo.disabled == false) {
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