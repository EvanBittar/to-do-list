<body>
    <h4>hello , <?= $_SESSION['name'] ?? 'Guset' ?></h4>
    <div class="wrap">
        <form method="post">
            <div class="input">
                <input type="text" name="body" id="body" placeholder="New Task....">
                <button>Add</button>
        </form>
        <?php if ($_SESSION['name'] ?? false): ?>
        <form  method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button class="form2">log out</button>
        </form>
        <?php else: ?>
            <a href="register" class="form2">register</a>
            <a href="login" class="form2">log in</a>
        <?php endif; ?>
        <?php if (!empty($error['body'])): ?>
            <p class="error"><?= $error['body'] ?></p>
        <?php endif ?>
    </div>
    <div class="tabs">
        <a href="/to-do-list" class="<?= isURL('/to-do-list/') ? 'active' : '' ?>">All</a>
        <a href="active" class="<?= isURL('/to-do-list/active') ? 'active' : '' ?>">Active</a>
        <a href="complete" class="<?= isURL('/to-do-list/complete') ? 'active' : '' ?>">Completed</a>
    </div>
    <ul class="tasks">