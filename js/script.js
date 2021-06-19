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
getHTML('inicio.html')