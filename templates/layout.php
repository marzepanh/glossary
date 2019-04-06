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
</head>

<body>


<header>


    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav mr-auto text-white">
                <h4>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="/index.php?page=main">На главную <span class="sr-only">(current)</span></a>
                    </li>
                </h4>
                <h4>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/index.php?page=LangChoice">Выбрать
                            язык</a>
                    </li>
                </h4>

                <h4>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">О нас</a>
                    </li>
                </h4>
            </ul>


                <a class="btn btn-warning btn-primary" href="/index.php?page=log-in" >Вход</a>




        </div>
    </nav>
</header>

<?= $this->section('content') ?>


</body>
</html>