<?php 
require 'par/head.php'; 
require 'par/nav.php'; 
foreach ($tasks as $task): ?>
    <li class="task">
        <label for="t1" class="task-label" style="<?= IsDone($task['active']) ? 'text-decoration: line-through' : '' ?>"><?= $task['body'] ?></label>
        <form method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $task['id'] ?>">
            <div>
                <?php if (!IsDone($task['active'])): ?>
                    <a href="Done?id=<?= $task['id'] ?>" class="task-label" style="color:chartreuse;">Done</a>
                <?php endif; ?>
                <button class="delete-btn">X</button>
            </div>
        </form>
    </li>
<?php endforeach; ?>
</ul>
</div>
</body>

</html>