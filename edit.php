<?php
require ('config.php');

$id = $_GET['id'];
$groups = $pdo -> query('SELECT * FROM groups WHERE id = :id')-> fetchAll();