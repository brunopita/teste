/**
 * Created by Bruno on 08/04/2015.
 */
$('$formularioCadastro').submi(function(e)
{
    e.preventDefault();
    if($('$enviar').val() == 'Enviando...'){
        return(false);
    }

    $('$enviar').val('Enviando...');
    $.ajax({
        url: "index.html",
        type: 'post',
        dataType: 'html',
        data: {
            'nome': $('$nome').val(),
            'descricao': &('$descricao').val(),

    }
    })
}