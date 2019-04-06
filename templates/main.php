<?php $this->layout('layout', ['title' => 'ProjectD']) ?>
<main role="main">

    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-fluid" alt="Responsive image">

    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-fluid" alt="Responsive image">

    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-fluid" alt="Responsive image">

    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-fluid" alt="Responsive image">





    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">

            <?php
            foreach($topics as $topic) {?>
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= $topic["image"]?>" alt="Generic placeholder image" width="140" height="140">
                    <h2><?= $topic["name"]?></h2>
                    <p></p>
                    <p><a class="btn btn-warning" href="index.php?page=topic&id=<?= $topic["id"]?>" role="button">Начать &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            <?php } ?>


        </div><!-- /.row -->








        <!-- FOOTER -->
        <footer class="container">
            <p class="float-right"><a href="#">Back to top</a></p>
            <p>&copy; 2018-2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>



