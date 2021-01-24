<?php
require "lib.php";
$data = select();

?>

<div>
    <a href="insert.php">Add Task</a>
</div>
<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>Task</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php foreach($data as $task): ?>
    <tr>
        <td><?= $task['id']; ?></td>
        <td><?= $task['task']; ?></td>
        <td><a href="update.php?id=<?= $task['id']; ?>">Update</a></td>
        <td><a href="delete.php?id=<?= $task['id']; ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>