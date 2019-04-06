<?php $this->layout('layout', ['title' => 'authorization']) ?>

<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" class="img-fluid" alt="Responsive image">

<h2> <p align="center"><?= $topic["name"]?></p> </h2>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Выражение</th>
            <th scope="col">Перевод</th>
            <th scope="col">Произношение</th>
            <th scope="col"></th>
        </tr>
        </thead>

        <?php
        foreach($sentences as $sentence) {
            // var_dump($sentence);
            ?>


            <tbody>
            <tr>
                <th scope="row"><?= $sentence["id"]?></th>
                <td><?= $sentence["source"]?></td>
                <td><?= $sentence["translate"]?></td>
                <td><?= $sentence["transcription"]?></td>

            </tr>
            </tbody>

        <?php } ?>

        <?php  if (isset($_SESSION['user_id'])){ ?>
            <a class="btn btn-warning" href="index.php?page=topic&id=<?= $topic["id"]?>&mode=UserCustomEdit" >Удалить предложения</a>
        <?php } ?>






