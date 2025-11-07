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