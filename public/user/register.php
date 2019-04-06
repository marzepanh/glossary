<?php
$message = '';

if ( !empty($_POST['login']) && !empty($_POST['password'])) {

    try {

        $sql = 'insert into user (username, password_hash) VALUE (:user, :pass)';
        $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute([
            'user' => $_POST['login'],
            'pass' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ]);
        $message = 'Успешная регистрация';
    } catch (Throwable $e){
        $message = 'Регистрация не удалалась';

    };
}
echo $templates->render('register', ['message' => $message]);



