<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>To-do List & Task</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    * {
      transition: all 0.3s ease;
    }
  /* Hide scrollbar only for elements with .no-scrollbar */
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  .no-scrollbar {
    -ms-overflow-style: none;  /* IE/Edge */
    scrollbar-width: none;     /* Firefox */
  }
  </style>
</head>
<body class="bg-white text-gray-900 font-[Poppins] min-h-screen flex flex-col">
  <!-- Header -->
  <header class="flex flex-wrap items-center justify-between border-b border-gray-200 px-4 py-3 gap-3">
    <div class="flex items-center gap-4">
      <h1 class="text-xl sm:text-2xl font-bold tracking-wide">
        <span class="text-gray-700 font-normal text-base sm:text-lg">to-do List & Task</span>
      </h1>
      <?php if (Core\Session::has('name') ?? false): ?>
        <span class="text-sm sm:text-base text-gray-600">Welcome, <?= htmlspecialchars(Core\Session::get('name')) ?></span>
      <?php endif; ?>
    </div>

    <div class="flex gap-2 justify-center sm:justify-end w-full sm:w-auto">
      <?php if (Core\Session::has('name') ?? false): ?>
        <form action="/to-do-list/logout" method="POST" class="m-0">
          <button type="submit" class="bg-red-600 text-white px-4 py-1.5 rounded-lg hover:bg-red-700 text-sm sm:text-base">
            Logout
          </button>
        </form>
      <?php else: ?>
        <a href="/to-do-list/login" class="border border-black text-black px-4 py-1.5 rounded-lg hover:bg-black hover:text-white text-sm sm:text-base">Sign In</a>
        <a href="/to-do-list/register" class="bg-black text-white px-4 py-1.5 rounded-lg hover:opacity-80 text-sm sm:text-base">Sign Up</a>
      <?php endif; ?>
    </div>
  </header>
