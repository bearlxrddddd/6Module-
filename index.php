<?php
//CONNECT DB
require ('config.php');

//selectAll

$stmt = $pdo->query("
    SELECT students.id, students.name, groups.name AS group_name
    FROM students
    LEFT JOIN groups ON students.group_id = groups.id
");

$students = $stmt -> fetchAll();
//вывод всех данных с бд        

?>
<!-- FORM -->
<a href="add.php">Добавить студента</a>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Группа</th>
            <th>Действия</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= htmlspecialchars($student['name']) ?></td>
            <td><?= $student['group_name'] ?? '—' ?></td>
            <td class="actions">
                <a href="edit.php?id=<?= $student['id'] ?>">Изменить</a>
                <a href="delete.php?id=<?= $student['id'] ?>" 
                    onclick="return confirm('Удалить студента?')">Удалить</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>