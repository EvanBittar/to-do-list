<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900 font-[Poppins] min-h-screen flex flex-col items-center justify-center p-6">

    <h1 class="text-2xl font-bold mb-6">Add New Task</h1>

    <form method="POST" class="w-full max-w-md space-y-4">
        <input type="hidden" name="_method" value="PUT">
        <!-- Select Template -->
        <label class="block">
            <span class="text-gray-700">Select a Template</span>
            <select name="emoji" class="w-full border border-gray-300 rounded-lg p-2">
                <?php foreach ($templates as $t): ?>
                    <option value="<?= $t['emoji'] ?>"><?= $t['emoji'] ?> <?= $t['title'] ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <!-- Task Title -->
        <label class="block">
            <span class="text-gray-700">Task Title</span>
            <input type="text" name="title" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Enter task title">
            <?php if (!empty($error['title'])): ?>
                <p class="text-red-500"><?= $error['title'] ?></p>
            <?php endif; ?>
        </label>

        <button type="submit" class="w-full bg-black text-white p-2 rounded-lg hover:opacity-80">Add Task</button>

    </form>

    <a href="" class="mt-4 text-blue-600 hover:underline">Back to Schedule</a>

</body>

</html>