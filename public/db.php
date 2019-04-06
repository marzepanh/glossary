<?php
$host = 'localhost';
$dbName = 'db_amak'; //ваша база данных
$charset = 'utf8';
$userName = 'amak'; //ваше имя пользователя
$password = 'b5f39f'; //ваш пароль

$dsn = "mysql:host=$host;dbname=$dbName;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $userName, $password, $options);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

return $pdo;






$createTableSql = <<<SQL
CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
)
    


CREATE TABLE `Sentence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(1000) NOT NULL,
  `translate` varchar(1000) NOT NULL,
  `transcription` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
)


CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `lang_id` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
  
  
)
SQL;

$stmt = $pdo->prepare($createTableSql);
$result = $stmt->execute();





/*
$users = [
        ['student', 'student_pass'],
        ['karl', 'karl_pass'],
        ['vasya', 'vasya_pass'],
    ];

foreach ($users as $user) {
        $sql = 'insert into user (username, password_hash) VALUES (:user, :pass)';
        $stmt = $pdo->prepare($sql); // Prevent MySQl injection. $stmt means statement
        $stmt->execute([
            'user' => $user[0],
            'pass' => $user[1],
        ]);
        var_dump('Вставка в таблицу ' . $user[0]);
        var_dump($result);
    }
*/

