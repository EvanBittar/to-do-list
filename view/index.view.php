<?php
require base_path('view/par/head.php');
require base_path('view/par/nav.php');
?>
<?php foreach ($tasks as $task): ?>
    <li class="task">
        <label for="t1" class="task-label" style="<?= IsDone($task['active']) ? 'text-decoration: line-through' : '' ?>"><?= $task['body'] ?></label>
        <a href="edit?id=<?= $task['id'] ?>" class="task-edit">edit</a>
        <div>
            <?php if (IsDone($task['active'])): ?>
                <a href="UnDone?id=<?= $task['id'] ?>" class="task-label" style="color:chartreuse;">Un-Done</a>
            <?php endif; ?>
            <?php if (!IsDone($task['active'])): ?>
                <a href="Done?id=<?= $task['id'] ?>" class="task-label" style="color:chartreuse;">Done</a>
            <?php endif; ?>
        </div>
    </li>
<?php endforeach; ?>
</ul>
</div>
</body>

</html>