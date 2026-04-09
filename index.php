<?php
//CONNECT DB
require ('config.php');
//selectAll

$stmt = $pdo -> query('SELECT * from students ');
$students = $stmt -> fetchAll();
//вывод всех данных с бд

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
    <a href="add.php">Добавить студента</a><br>
    <?php foreach ($students as $student) { ?>
    <?php echo $student['group_id'] . $student['name'] . '<br>'; ?>
<?php  } ?>
<a href="update.php?id=<?php $student['id'] ?>">Изменить</a>
<a href="delete.php?id=<?php $student['id'] ?>"
    onclick="return confirm('Удалить?')">Удалить</a>
</body>
</html>