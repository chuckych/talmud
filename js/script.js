function getHTML(url) {
    $.ajax(
        {
            url: url + '?v=' + $('#vjs').val(),
            type: "get",
            DataType: 'html'
        })
        .done(function (data) {
            $(".container").html(data);
        })
}
// getHTML('fin.html')
getHTML('inicio.html')
// getHTML('preguntas/principiante_a.html')
// getHTML('preguntas/avanzado_d.html')
