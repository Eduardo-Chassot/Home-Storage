$.fn.extend({
    buscarAjax: function(url, data) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            contentType: 'application/json',
            data : data,
            success: function(array)
            {
                console.log(array);
            },
            error:function(errorThrown){
                alert('Erro ao carregar');
                console.log(errorThrown);
            }
        });
    }
})