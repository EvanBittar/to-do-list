<?php  
require base_path('view/par/head-register.php')
?>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Register</h1>
        </div>
        
        <form method="post" id="loginForm">
            <div class="input-group">
                <label for="email">user-email</label>
                <input type="text" id="email" name="email" value="<?= $_POST['email'] ?? '' ?>">
                <?php if (!empty($error['email'])): ?>
                    <p class="error"><?= $error['email'] ?></p>
                <?php endif ?>
            </div>
            
            <div class="input-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" >
            <?php if (!empty($error['password'])): ?>
                <p class="error"><?= $error['password'] ?></p>
            <?php endif ?>
            </div>
            
            <button type="submit" class="login-button">register</button>
        </form>
</body>
</html>