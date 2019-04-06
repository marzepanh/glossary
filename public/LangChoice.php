<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
    if( isset($_POST['currentLang']) ){
    $langId = $_POST['currentLang'];
    //var_dump($langId);
    setcookie("lang", $langId ,time() + 3600);
    header('Location: /index.php?page=main');
    exit;
}
    }
//session_destroy();
//var_dump($_SESSION['user_id']);

echo $templates->render('LangChoice', [
'name' => 'Jonathan Joestar',
]);

