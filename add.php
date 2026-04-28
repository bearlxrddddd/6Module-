<?php
require ('config.php');
//get all groups
$groups = $pdo -> query('SELECT id, name FROM groups')-> fetchAll();
$name = $_POST['name'];
$group_id = $_POST['group_id'];

$stmt = $pdo ->prepare("INSERT INTO students (name, group_id) VALUES (:name, :group_id)");

$stmt -> execute([
    'name' => $name,
    $group_id => $group_id
]);
header('Location: /');