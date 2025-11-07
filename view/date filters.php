
      <!-- Date Filters -->
      <div class="flex space-x-2 mt-4 overflow-x-auto pb-2">
        <?php 
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $startOfWeek = date('Y-m-d', strtotime('monday this week'));
        $endOfWeek = date('Y-m-d', strtotime('sunday this week'));
        $startOfLastWeek = date('Y-m-d', strtotime('monday last week'));
        $endOfLastWeek = date('Y-m-d', strtotime('sunday last week'));
        ?>
        <a href="/to-do-list?date=<?= $today ?>" 
           class="px-3 py-1 text-sm bg-blue-100 text-blue-700 rounded-full hover:bg-blue-200 whitespace-nowrap">
          Today
        </a>
        <a href="/to-do-list?date=<?= $yesterday ?>" 
           class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 whitespace-nowrap">
          Yesterday
        </a>
        <a href="/to-do-list?date_from=<?= $startOfWeek ?>&date_to=<?= $endOfWeek ?>" 
           class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 whitespace-nowrap">
          This Week
        </a>
        <a href="/to-do-list?date_from=<?= $startOfLastWeek ?>&date_to=<?= $endOfLastWeek ?>" 
           class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 whitespace-nowrap">
          Last Week
        </a>
      </div>
    </div>
