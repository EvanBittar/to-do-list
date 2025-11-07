<?php require base_path('view/head.php') ?>

<main class="flex-grow flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white p-8 rounded-lg shadow-md w-full">
            <h2 class="text-2xl font-bold text-center mb-6">Create an Account</h2>
            <p class="text-gray-600 text-center mb-8">Join us to manage your tasks effectively</p>
            
            <form method="POST" action="/to-do-list/register" class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" id="name" name="name" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                           placeholder="Your name">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                           placeholder="you@example.com">
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                           placeholder="••••••••">
                    <p class="mt-1 text-xs text-gray-500">Use 8 or more characters with a mix of letters, numbers & symbols</p>
                </div>
                
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent"
                           placeholder="••••••••">
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
