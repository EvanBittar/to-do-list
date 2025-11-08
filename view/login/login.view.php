<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To-do List & Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="flex-grow flex items-center justify-center p-4 py-28">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 rounded-lg shadow-md w-full">
                <?php if (isset($_SESSION['message'])): ?>
                    <div class="mb-6 p-4 bg-blue-50 text-blue-700 rounded-lg text-sm">
                        <?= htmlspecialchars($_SESSION['message']) ?>
                        <?php unset($_SESSION['message']); // Clear the message after displaying 
                        ?>
                    </div>
                <?php endif; ?>
                <h2 class="text-2xl font-bold text-center mb-6">Welcome Back</h2>
                <p class="text-gray-600 text-center mb-8">Sign in to manage your tasks</p>

                <form method="POST" action="/to-do-list/login" class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                            placeholder="you@example.com"
                            value="<?= old('email') ?>">
                        <?php if (!empty($error['email'])): ?>
                            <p class="text-sm text-red-500"><?= $error['email'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <!-- <a href="#" class="text-sm text-gray-600 hover:text-black">Forgot password?</a> -->
                        </div>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                            placeholder="••••••••">
                        <?php if (!empty($error['password'])): ?>
                            <p class="text-sm text-red-500"><?= $error['password'] ?></p>
                        <?php endif; ?>
                    </div>

                    <button type="submit"
                        class="w-full bg-black text-white py-2.5 px-4 rounded-lg hover:opacity-90 transition-opacity font-medium">
                        Sign In
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="/to-do-list/register" class="font-medium text-black hover:underline">Sign up</a>
                </p>
            </div>
        </div>
    </main>

    <?php require base_path('view/footer.php') ?>