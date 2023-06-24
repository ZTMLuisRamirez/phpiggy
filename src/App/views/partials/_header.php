<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo e($title); ?> - PHPiggy</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/assets/main.css" />
</head>

<body class="bg-indigo-50 font-['Outfit']">
  <!-- Start Header -->
  <header class="bg-indigo-900">
    <nav class="mx-auto flex container items-center justify-between py-4" aria-label="Global">
      <a href="/" class="-m-1.5 p-1.5 text-white text-2xl font-bold">PHPiggy</a>
      <!-- Navigation Links -->
      <div class="flex lg:gap-x-10">
        <a href="/about" class="text-gray-300 hover:text-white transition">About</a>
        <a href="/login" class="text-gray-300 hover:text-white transition">Login</a>
        <a href="/register" class="text-gray-300 hover:text-white transition">Register</a>
        <a href="/logout" class="text-gray-300 hover:text-white transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
          </svg>

          Logout
        </a>
      </div>
    </nav>
  </header>
  <!-- End Header -->