            <?php $this->layout('layout', ['title' => 'registration']) ?>

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

                    A {
                        color: #3c3f41; /* Цвет ссылок */
                    }
                    A:active {
                        color: #ffff00; /* Цвет активных ссылок */
                    }

                </style>
                <!-- Custom styles for this template -->
                <link href="/css/sign.css" rel="stylesheet">


            <body class="text-center" >

            <form method="post" class="form-signin">
                <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">
                    <a href="http://amak.sesc2018.dev.sesc-nsu.ru/index.php?page=log-in#" class="stretched-link text-reset">Вход/</a>
                    <a href="http://amak.sesc2018.dev.sesc-nsu.ru/index.php?page=register" class="stretched-link text-reset">Регистрация</a>
                </h1>
                <label for="inputEmail" class="sr-only">Укажите email</label>
                <input type="email" name="login" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputPassword" class="sr-only">Пароль</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегестрироваться</button>

                <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
            </form>
            </body>



            <?=$message ?>