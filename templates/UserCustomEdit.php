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
    <form method="post">
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
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="id[<?=$sentence['id']?>]" value="<?=$sentence['id']?>" id="id<?=$sentence['id']?>">
                        <label class="custom-control-label" for="id<?=$sentence['id']?>" >Select</label>
                    </div>
                </td>
            </tr>
            </tbody>

        <?php } ?>
        <p><input type='submit' name="delete"  value='Удалить'></p>
    </form>


    <a class="btn btn-warning" href="index.php?page=topic&id=<?= $topic["id"]?>&mode=userCustom" >Свои предложения</a>
