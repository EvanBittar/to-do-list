<?php require base_path('view/par/head.php'); ?>
<body>
    <div class="wrap">
        <form method="post">
            <div class="input">
                <input type="text" name="body" id="body" placeholder="New Task...." value="<?= $task['body'] ?>">
                <button>Edit</button>
        </form>
        <?php if (!empty($error['body'])): ?>
            <p class="error"><?= $error['body'] ?></p>
        <?php endif ?>
        
        <form method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $task['id'] ?>">
            <button>DELETE</button>
        </form>
    </div>