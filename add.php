<?php
require ('config.php');
//get all groups
$groups = $pdo -> query('SELECT id, name FROM groups')-> fetchAll();