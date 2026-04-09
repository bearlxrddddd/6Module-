<?php
//CONNECT DB
$host = 'localhost';
$dbname = 'school_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname; charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $pdo = NEW PDO($dsn, $user, $pass, $options);
    echo "Подключение успешно!";
        } catch (PDOException $e) {
        die("Ошибка подключения:" . $e -> getMessage());
    }
//selectAll

$stmt = $pdo -> query('SELECT * from student ');
$students = $stmt -> fetchAll();
//вывод всех данных с бд
foreach ($students as $student) {
    echo $student['group_id'] . $student['name'];
}
?>
<!-- FORM -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    
</body>
</html>