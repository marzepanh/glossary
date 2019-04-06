<?php
if (isset($_SESSION['user_id'])){
    $userID = $_SESSION['user_id'];
}
$topicId = $_GET['id'];
$mode=$_GET['mode'] ?? 'all';


if($_SERVER['REQUEST_METHOD']=='POST') {



        $data = $_POST;
        print_r($data);
        var_dump($_SESSION['user_id']);

        $us = $_SESSION['user_id'];
        var_dump($pdo);
        var_dump($us);

        if (! empty($data['id']) && ! empty($us) ) {
                 //обработка формы наполнения usercustom
            if( isset($_POST['add'])) {
                foreach ($data['id'] as &$val) {


                    var_dump($val);

                    try {
                        $sql = 'insert into user_sentence (sentence_id, user_id ) VALUES (:sent_id, :us_id)';
                        $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
                        $stmt->execute([
                            'sent_id' => $val,
                            'us_id' => $us,
                        ]);

                    } catch (PDOException $exception) {

                    }
                }
                //обработка формы удаления из usercustom
            }  else if(isset($_POST['delete']) ) {
                foreach ($data['id'] as &$val) {
                    var_dump($val);
                    //удаление предложения из БД
                    $sql = 'DELETE FROM user_sentence WHERE (sentence_id, user_id ) = (:sent_id, :us_id)';
                    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
                    $stmt->execute([
                        'sent_id' => $val,
                        'us_id' => $us,
                    ]);

                }
            }


        }







}

if($mode == 'all') {

    $sql = 'select * from Sentence where topic_id=:topic_id';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'topic_id' => $topicId
    ]);
//var_dump('Первая выборка');
//var_dump($result);

    $sentences = [];


    while ($sentence = $stmt->fetch()) {
        $sentences[] = $sentence;
       // var_dump($sentences);
    }



    $sql = 'select * from topics where id=:topic_id';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'topic_id' => $topicId
    ]);

    $topic = $stmt->fetch();


    echo $templates->render('topic', [
        'message' => 'klj;kl',
        'sentences' => $sentences,
        'topic' => $topic

    ]);

} else if ($mode == 'edit') {
    $sql = 'select * from Sentence where topic_id=:topic_id';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'topic_id' => $topicId
    ]);
//var_dump('Первая выборка');
//var_dump($result);

    $sentences = [];


    while ($sentence = $stmt->fetch()) {
        $sentences[] = $sentence;
      //  var_dump($sentences);
    }


    $sql = 'select * from topics where id=:topic_id';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'topic_id' => $topicId
    ]);

    $topic = $stmt->fetch();


    echo $templates->render('topicEdit', [
        'message' => 'klj;kl',
        'sentences' => $sentences,
        'topic' => $topic

    ]);
} else if ($mode == 'userCustom') {
    $sql = 'select * from Sentence s 
            inner join user_sentence u on u.sentence_id=s.id
            where topic_id=:topic_id and user_id=:user_id';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'topic_id' => $topicId,
        'user_id' => $userID
    ]);

    $sentences = [];


    while ($sentence = $stmt->fetch()) {
        $sentences[] = $sentence;
        //var_dump($sentences);
    }


    $sql = 'select * from topics where id=:topic_id';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'topic_id' => $topicId
    ]);

    $topic = $stmt->fetch();


    echo $templates->render('UserCustom', [
        'message' => 'klj;kl',
        'sentences' => $sentences,
        'topic' => $topic,
        'topic_id' => $topicId,
        'user_id' => $userID,

    ]);
} else if ($mode == 'UserCustomEdit') {
    //тут будет edit страница
    $sql = 'select * from Sentence s 
            inner join user_sentence u on u.sentence_id=s.id
            where topic_id=:topic_id and user_id=:user_id';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'topic_id' => $topicId,
        'user_id' => $userID
    ]);

    $sentences = [];


    while ($sentence = $stmt->fetch()) {
        $sentences[] = $sentence;
        //var_dump($sentences);
    }


    $sql = 'select * from topics where id=:topic_id';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'topic_id' => $topicId
    ]);

    $topic = $stmt->fetch();


    echo $templates->render('UserCustomEdit', [
        'message' => 'klj;kl',
        'sentences' => $sentences,
        'topic' => $topic,
        'topic_id' => $topicId,
        'user_id' => $userID,

    ]);

} else {
    echo "Такой страницы не существует";
}

