<?php require base_path('view/head.php') ?>

<main class="flex-grow flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white p-8 rounded-lg shadow-md w-full">
            <h2 class="text-2xl font-bold text-center mb-6">Welcome Back</h2>
            <p class="text-gray-600 text-center mb-8">Sign in to manage your tasks</p>
            
            <form method="POST" action="/to-do-list/login" class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                           placeholder="you@example.com">
                </div>
                
                <div>
                    <div class="flex justify-between items-center mb-1">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <!-- <a href="#" class="text-sm text-gray-600 hover:text-black">Forgot password?</a> -->
                    </div>
                    <input type="password" id="password" name="password" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                           placeholder="••••••••">
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
