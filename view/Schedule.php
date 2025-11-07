    <!-- Schedule -->
  <section class="p-6 relative overflow-y-auto flex-grow order-1 lg:order-2 no-scrollbar">
    <div class="mb-5">
      <div class="flex justify-between items-center">
        <div>
          <h2 class="text-xl font-semibold leading-tight"><?= date('l', strtotime($currentDate ?? 'now')) ?></h2>
          <p class="text-gray-500 text-sm mt-0.5"><?= date('d M Y', strtotime($currentDate ?? 'now')) ?></p>
        </div>
        <div class="flex space-x-2">
          <a href="/to-do-list?date=<?= date('Y-m-d', strtotime(($currentDate ?? 'now') . ' -1 day')) ?>" 
             class="px-3 py-1 bg-gray-100 rounded hover:bg-gray-200">
            &larr;
          </a>
          <a href="/to-do-list?date=<?= date('Y-m-d') ?>" 
             class="px-3 py-1 bg-gray-100 rounded hover:bg-gray-200">
            Today
          </a>
          <a href="/to-do-list?date=<?= date('Y-m-d', strtotime(($currentDate ?? 'now') . ' +1 day')) ?>" 
             class="px-3 py-1 bg-gray-100 rounded hover:bg-gray-200">
            &rarr;
          </a>
        </div>
      </div>