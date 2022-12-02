function formatar(resultados){
    console.log("chegou!");
    var id = resultados.id;
    var nome = resultados.nome;
    var quantidade = resultados.quantiedade;
    var template = `
    <tr>
        <td>${id}</td>
        <td>${nome}</td>
        <td>${quantidade}</td>
    </tr>
    `;
    console.log(template);
    return template;
}

function buscarAjax(url = 'ajax/lista-itens.php', data = null) {
    $.ajax({
        type: 'GET',
        url: url,
        dataType: 'json',
        contentType: 'application/json',
        data : data,
        success: function(array)
        {
            var retorno = formatar(array);
            return(retorno);
        },
        error:function(errorThrown){
            alert('Erro ao carregar');
            console.log(errorThrown);
        }
    });
}
