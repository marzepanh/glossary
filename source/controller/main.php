<?php
$cookie_lang = $_COOKIE['lang'];
$sql = 'select * from topics WHERE lang_id =:cookie_lang';
$stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
$result = $stmt->execute([
    'cookie_lang' => $cookie_lang
]);
//var_dump('Первая выборка');
//var_dump($result);

$topics = [];


while ($topic = $stmt->fetch()) {
    $topics[] = $topic;

}

//var_dump($topics);


echo $templates->render('main', [
    'name' => 'Jonathan',
    'topics' => $topics,
]);

