<body>
    <div class="wrap">
        <form method="post">
            <div class="input">
                <input type="text" name="body" id="body" placeholder="New Task....">
                <button>Add</button>
        </form>
        <?php if (!empty($error['body'])): ?>
            <p class="error"><?= $error['body'] ?></p>
        <?php endif ?>
    </div>
    <?php if ($_SESSION['name'] ?? false): ?>
        <form method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button class="login">log out</button>
        </form>
    <?php else: ?>
        <a href="register" class="login">register</a>
        <a href="register" class="login">login</a>
    <?php endif; ?>
    <h4>hello,<?= $_SESSION['name'] ?? 'Guest' ?></h3>

        <div class="tabs">
            <a href="/to-do-list" class="<?= isURL('/to-do-list/') ? 'active' : '' ?>">All</a>
            <a href="active" class="<?= isURL('/to-do-list/active') ? 'active' : '' ?>">Active</a>
            <a href="complete" class="<?= isURL('/to-do-list/complete') ? 'active' : '' ?>">Completed</a>
        </div>
        <ul class="tasks">