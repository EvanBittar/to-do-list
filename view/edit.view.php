<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900 font-[Poppins] min-h-screen flex flex-col items-center justify-center p-6">
    <h1 class="text-2xl font-bold mb-6">Edit Task</h1>

    <form method="POST" action="/to-do-list/update" class="w-full max-w-md space-y-4">
        <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id'] ?? '') ?>">
        
        <!-- Select Template -->
        <label class="block">
            <span class="text-gray-700">Select a Template</span>
            <select name="emoji" class="w-full border border-gray-300 rounded-lg p-2">
                <?php foreach ($templates as $t): ?>
                    <option 
                        value="<?= htmlspecialchars($t['emoji']) ?>" 
                        <?= ($t['emoji'] === $emoji) ? 'selected' : '' ?>
                    >
                        <?= htmlspecialchars($t['emoji']) ?> <?= htmlspecialchars($t['title']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <!-- Task Title -->
        <label class="block">
            <span class="text-gray-700">Task Title</span>
            <input 
                type="text" 
                name="title" 
                value="<?= htmlspecialchars($title) ?>" 
                class="w-full border border-gray-300 rounded-lg p-2" 
                placeholder="Enter task title"
            >
            <?php if (!empty($error['title'])): ?>
                <p class="text-red-500"><?= htmlspecialchars($error['title']) ?></p>
            <?php endif; ?>
        </label>

        <div class="flex space-x-4">
            <button type="submit" class="flex-1 bg-black text-white p-2 rounded-lg hover:opacity-80">
                Update Task
            </button>
            <a href="/to-do-list/" class="flex-1 bg-gray-200 hover:bg-gray-300 text-center p-2 rounded-lg">
                Cancel
            </a>
        </div>
    </form>
</body>
</html>