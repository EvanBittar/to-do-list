<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To-do List & Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <main class="flex-grow flex items-center justify-center p-4 py-7">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 rounded-lg shadow-md w-full">
                <h2 class="text-2xl font-bold text-center mb-6">Create an Account</h2>
                <p class="text-gray-600 text-center mb-8">Join us to manage your tasks effectively</p>

                <form method="POST" action="/to-do-list/register" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                            placeholder="Your name"
                            value="<?= $_POST['name'] ?? '' ?>">
                        <?php if (!empty($error['name'])): ?>
                            <p class="text-sm text-red-500"><?= $error['name'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                            placeholder="you@example.com"
                            value="<?= $_POST['email'] ?? '' ?>">
                        <?php if (!empty($error['email'])): ?>
                            <p class="text-sm text-red-500"><?= $error['email'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                            placeholder="••••••••"
                            value="<?= $_POST['password'] ?? '' ?>">
                        <p class="mt-1 text-xs text-gray-500">Use 8 or more characters with a mix of letters, numbers & symbols</p>
                        <?php if (!empty($error['password'])): ?>
                            <p class="text-sm text-red-500"><?= $error['password'] ?></p>
                        <?php endif; ?>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                            placeholder="••••••••">
                        <?php if (!empty($error['confirm_password'])): ?>
                            <p class="text-red-500"><?= $error['confirm_password'] ?></p>
                        <?php endif; ?>
                    </div>

                    <button type="submit"
                        class="w-full bg-black text-white py-2.5 px-4 rounded-lg hover:opacity-90 transition-opacity font-medium mt-2">
                        Create Account
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-gray-600">
                    Already have an account?
                    <a href="/to-do-list/login" class="font-medium text-black hover:underline">Sign in</a>
                </p>
            </div>
        </div>
    </main>

    <?php require base_path('view/footer.php') ?>