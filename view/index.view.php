<?php require base_path('view/head.php') ?>
<!-- Main Content -->
<main class="flex flex-col lg:grid lg:grid-cols-[1.3fr_2fr_1fr] flex-grow overflow-hidden">
  <?php require base_path('view/Sidebar.php') ?>
  <?php require base_path('view/Schedule.php') ?>
  <?php require base_path('view/date filters.php') ?>
  <div class="relative border-l-2 border-gray-200 min-h-[60vh] lg:h-full pl-6 sm:pl-8">
    <?php foreach ($tasks as $task): ?>
      <div class="bg-gray-50 hover:bg-yellow-100 rounded-lg px-4 py-2 mb-3 flex items-center justify-between <?= $task['completed'] ? 'opacity-60' : '' ?>">
        <div class="flex items-center">
          <form method="POST" action="/to-do-list/complete" class="mr-3">
            <input type="hidden" name="id" value="<?= $task['id'] ?>">
            <input type="hidden" name="completed" value="<?= $task['completed'] ? '0' : '1' ?>">
            <button type="submit" class="w-5 h-5 border rounded flex items-center justify-center <?= $task['completed'] ? 'bg-green-500 border-green-500' : 'border-gray-300' ?>">
              <?php if ($task['completed']): ?>
                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
              <?php endif; ?>
            </button>
          </form>
          <span class="<?= $task['completed'] ? 'line-through text-gray-500' : '' ?>">
            <?= $task['emoji'] ?> <?= htmlspecialchars($task['title']) ?>
          </span>
        </div>
        <div class="flex items-center space-x-2">
          <?php if (!$task['completed']): ?>
            <a href="edit?id=<?= $task['id'] ?>" class="text-gray-400 hover:text-gray-600 text-xl leading-none">+</a>
          <?php endif; ?>
          <form method="POST" action="/to-do-list/delete" onsubmit="return confirm('Are you sure you want to delete this task?')">
            <input type="hidden" name="id" value="<?= $task['id'] ?>">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="text-red-400 hover:text-red-600 text-xl leading-none">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  </section>
</main>
</body>

</html>