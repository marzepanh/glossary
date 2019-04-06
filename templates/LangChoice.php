<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>title</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/carousel/carousel.css" rel="stylesheet">
    <script type="text/javascript" src="popper.min.js"></script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Подключаем плагин Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
            crossorigin="anonymous"></script>

    <!-- Подключаем Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

</head>

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

<!-- Custom styles for this template -->
<link href="/css/cover.css" rel="stylesheet">

<body class="text-center">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Здравствуй!</h1>
        <p class="lead">Выбери язык и нажми Продолжить</p>


            <div class="dropdown">

                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Языки
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <form method="POST">
                    <button type="submit" class="dropdown-item" name="currentLang" value="1" id="1">Английский</button>
                    </form>

                    <form method="POST">
                        <button type="submit" class="dropdown-item" name="currentLang" value="2" id="2">Немецкий</button>
                    </form>
                    <a class="dropdown-item disabled" tabindex="-1" aria-disabled="true">Французский</a>
                </div>
            </div>
        <a class="btn btn-warning" href="index.php?page=main" >На главную</a>


    </main>
</div>


</div>


</body>

</html>


