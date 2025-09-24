<body>
    <div class="wrap">
        <form  method="post">
        <div class="input">
            <input type="text" name="body" id="body" placeholder="New Task....">
            <button>Add</button>
        </div>
                <?php if(!empty($error['body'])): ?>
        <p class="error"><?= $error['body'] ?></p>
    <?php endif ?>
        </form>

        <div class="tabs">
            <a href="/to-do-list" class="<?= isURL('/to-do-list/') ? 'active' : '' ?>">All</a>
            <a href="active" class="<?= isURL('/to-do-list/active') ? 'active' : '' ?>">Active</a>
            <a href="complete" class="<?= isURL('/to-do-list/complete') ? 'active' : '' ?>">Completed</a>
        </div>
        <ul class="tasks">