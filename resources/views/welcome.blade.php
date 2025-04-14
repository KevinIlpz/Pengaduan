<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pengaduan</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
</head>
<body class="bg-gray-900 text-gray-200 antialiased">
  <!-- Navigation -->
  <nav class="bg-gray-800 border-b border-gray-700 py-4 fixed w-full z-50">
    <div class="container mx-auto px-4 flex justify-between items-center">
      <!-- Logo / Brand -->
      <a href="#" class="text-2xl font-bold text-gray-100">Pengaduan</a>
      <!-- Authentication Buttons -->
      <div class="flex space-x-4">
        <a href="{{ route('login') }}" class="px-4 py-2 border border-gray-500 rounded hover:bg-gray-700 transition">Masuk</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="min-h-screen flex flex-col justify-center items-center pt-20">
    <h1 class="text-5xl md:text-6xl font-bold mb-6 text-center">
      Sampaikan Keluhan Anda
    </h1>
    <p class="text-lg md:text-xl mb-8 text-gray-400 max-w-xl text-center">
      Laporkan masalah lingkungan dan masyarakat dengan cepat dan mudah. Kami mendengarkan untuk solusi nyata.
    </p>
    <div class="flex gap-4">
      <a href="{{ route('register') }}" class="px-6 py-3 bg-gray-500 text-gray-900 rounded hover:bg-gray-400 transition shadow">
        Buat Laporan
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-6 bg-gray-900 border-t border-gray-800">
    <div class="container mx-auto px-4 text-center">
      <p class="text-gray-500 text-sm">&copy; 2023 Pengaduan. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
