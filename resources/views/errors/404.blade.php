{{-- resources/views/errors/404.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <style>
        body {
          font-family: 'Fira Code', monospace;
        }
    </style>
</head>
<body class="bg-gray-800 flex items-center justify-center h-screen">
    <div class="text-center px-6">
        <h1 class="text-9xl font-extrabold text-green-600">404</h1>
        <h2 class="text-8xl font-extrabold text-green-600">Not Found</h2>
        <p class="text-2xl md:text-3xl font-semibold text-gray-800 mt-4">Oops! Halaman tidak ditemukan</p>
        <p class="text-gray-500 mt-2">Sepertinya link yang kamu buka salah atau sudah tidak tersedia.</p>

        <div class="mt-6">
            <a href="{{ url('/') }}" 
               class="px-6 py-3 rounded-lg bg-green-600 text-white text-lg font-medium hover:bg-green-700 transition">
               ← Kembali ke Beranda
            </a>
        </div>

        <!-- {{-- Optional animasi sederhana --}}
        <div class="mt-10 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h13M9 5h13M3 5h.01M3 17h.01M3 11h.01" />
            </svg>
        </div> -->
    </div>
</body>
</html>
