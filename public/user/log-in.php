<?php

$message = '';
$success = '';
if ( !empty($_POST['login']) && !empty($_POST['password']) ) {

    $sql = 'select *  from user where username=:user ';
    $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
    $result = $stmt->execute([
        'user' => $_POST['login'],
    ]);

    $user = $stmt->fetch();


    if ( password_verify( $_POST['password'] , $user["password_hash"] ) ){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_login'] = $user['username'];

        $success =  'Успешно!';
        echo $_SESSION['user_id'];
        echo $_SESSION['user_login'];
    } else {
        $message = 'Пароль неправильный';
        $success = '';

    }


}

echo $templates->render('log-in', ['message' => $message,
                                         'success' => $success
                                         ]);
