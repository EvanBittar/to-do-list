<?php require base_path('view/head.php') ?>
<!-- Main Content -->
<main class="flex flex-col lg:grid lg:grid-cols-[1.3fr_2fr_1fr] flex-grow overflow-hidden">
  <!-- Sidebar -->
  <aside class="border-r border-gray-200 p-5 overflow-y-auto h-[40vh] sm:h-auto lg:h-auto order-2 lg:order-1">
    <h2 class="text-lg font-semibold mb-1">Template</h2>
    <p class="text-gray-500 text-sm mb-4">Drag n drop card to time table</p>

    <div class="space-y-3">
      <?php foreach ($title as $item) : ?>
        <form method="POST" class="mb-3">
          <input type="hidden" name="emoji" value="<?= $item['emoji'] ?>">
          <input type="hidden" name="title" value="<?= $item['title'] ?>">
          <button type="submit" name="add_task" class="bg-gray-50 hover:bg-yellow-100 cursor-pointer p-3 rounded-lg w-full text-left">
            <?= $item['emoji'] ?> <b><?= $item['title'] ?></b>
            <p class="text-sm text-gray-500"><?= $item['desc'] ?></p>
          </button>
        </form>
      <?php endforeach ?>
    </div>
  </aside>

  <!-- Schedule -->
  <section class="p-6 relative overflow-y-auto flex-grow order-1 lg:order-2 no-scrollbar">
<div class="mb-5">
  <h2 class="text-xl font-semibold leading-tight">Thursday</h2>
  <p class="text-gray-500 text-sm mt-0.5">01 Jan 2024</p>
</div>


    <div class="relative border-l-2 border-gray-200 min-h-[60vh] lg:h-full pl-6 sm:pl-8">
      <?php foreach ($tasks as $task): ?>
        <div class="bg-gray-50 hover:bg-yellow-100 rounded-lg px-4 py-2 cursor-pointer mb-3 flex items-center justify-between">
          <?= $task['emoji'] ?> <?= htmlspecialchars($task['title']) ?>
          <a
          href="edit?id=<?= $task['id'] ?>"
          class="text-gray-400 hover:text-gray-600 text-xl leading-none">+
        </a>
      </div>
        <?php endforeach; ?>
    </div>
  </section>
</main>
</body>

</html>