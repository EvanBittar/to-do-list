<?php require 'par/head-Done.php'; ?>

<body>
    <div class="wrap">
        <div class="body">
            Are you Sure You Done It ?
            <p class="p1">The Task Is:</p>
            <p class="p2">*   <?= $task['body'] ?>   *</p>
        </div>
        <form method="post">
            <input type="hidden" name="_method" value="DONE">
            <div class="button">
                <button class="b1" name="answer" value="YES" >YES</button>
                <button class="b2" name="answer" value="NO" >NO</button>
            </div>
        </form>
    </div>
</body>

</html>