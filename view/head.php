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
    <h1 class="text-xl sm:text-2xl font-bold tracking-wide text-center flex-1">
      <span class="text-gray-700 font-normal text-base sm:text-lg">to-do List & Task</span>
    </h1>

    <div class="flex gap-2 justify-center sm:justify-end w-full sm:w-auto">
      <button class="border border-black text-black px-4 py-1.5 rounded-lg hover:bg-black hover:text-white text-sm sm:text-base">Sign In</button>
      <button class="bg-black text-white px-4 py-1.5 rounded-lg hover:opacity-80 text-sm sm:text-base">Sign Up</button>
    </div>
  </header>
