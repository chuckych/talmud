<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?= vjs() ?>">
    <title>Talmud</title>
</head>

<body class="bg-light">
    <input type="hidden" id="vjs" value="<?= vjs() ?>">
    <input type="hidden" id="errorMsg" value="">
    <div class="container p-3 w-100"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
<script>
   function cardQtns(id, qtn){ return `<div class="card-body shadow-sm pointer"><div class="form-check form-checkbox"><input class="form-check-input pointer" type="checkbox" id="` + id + `" name="` + id + `"><label class="form-check-label pointer ms-2" for="` + id + `"><p class="card-text text-secondary fw400">` + qtn + `</p></label></div></div>`}

    function getHTML(url){ $.ajax({ url: url + '?v=' + $('#vjs').val(), type: "get", DataType: 'html'}) .done(function(data){ $(".container").html(data);})}

    $.get('preguntas/preguntas.json').done(function(data){ $('#errorMsg').val(data.errorMsg)});
    getHTML('inicio.html')
</script>

</html>