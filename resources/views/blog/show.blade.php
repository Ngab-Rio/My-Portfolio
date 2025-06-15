<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blog | {{ $blogs->judul }}</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet" />

  <!-- Highlight.js CSS (dark) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">

  <!-- Highlight.js JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>

  <style>
    body {
      font-family: 'Fira Code', monospace;
    }
    pre {
      position: relative;
      background-color: #1e293b; /* Tailwind gray-800 */
      border-radius: 0.5rem;
      padding: 1rem;
      overflow-x: auto;
      margin-bottom: 1rem;
    }
    pre code {
      font-size: 0.875rem;
    }
    .copy-btn {
      position: absolute;
      top: 0.5rem;
      right: 0.5rem;
      font-size: 0.75rem;
      background-color: #16a34a; /* green-600 */
      color: white;
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem;
      display: none;
      cursor: pointer;
    }
    pre:hover .copy-btn {
      display: block;
    }
  </style>
</head>
<body class="bg-gray-900 text-white">

  {{-- Navbar (tetap seperti strukturmu) --}}
  <header class="bg-gray-800 shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-2xl font-bold text-white">Ngab-Rio.</h1>
      <button class="md:hidden text-white text-2xl" onclick="toggleNavbar()">&#9776;</button>
      <nav class="hidden md:flex space-x-6 text-white font-medium">
        @foreach(['home','about','blog','project','contact'] as $section)
        <a href="/#{{ $section }}" class="relative inline-block pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600 after:transition-all after:duration-300 hover:after:w-full">
          {{ ucfirst($section) }}
        </a>
        @endforeach
      </nav>
    </div>
    <div id="mobile-menu" class="md:hidden hidden flex-col px-6 pb-4 bg-gray-800 space-y-2 text-white font-medium">
      @foreach(['home','about','blog','project','contact'] as $section)
      <a href="/#{{ $section }}" class="hover:text-green-500">{{ ucfirst($section) }}</a>
      @endforeach
    </div>
  </header>

  {{-- Blog Content --}}
  <main class="container mx-auto px-6 py-40 max-w-4xl">
    <article>
      <h1 class="text-3xl font-bold text-green-500 mb-6">{{ $blogs->judul }} ></h1>

      @php $parsedown = new Parsedown(); @endphp
      <div class="prose prose-invert max-w-full text-gray-200 prose-headings:text-green-500 prose-a:text-green-400 prose-code:bg-gray-800 prose-code:px-1 prose-code:rounded prose-pre:shadow-lg prose-pre:py-2 prose-pre:px-4 prose-pre:rounded-xl">
        {!! nl2br($parsedown->text($blogs->deskripsi)) !!}
      </div>

      <a href="{{ url('/') }}#blog" class="inline-block mt-12 text-green-400 hover:text-green-200 transition hover:underline">← Kembali ke Blog</a>
    </article>
  </main>

  {{-- Footer --}}
  <footer class="bg-gray-800 text-white py-8 mt-20 border-t border-gray-700">
    <div class="max-w-screen-xl mx-auto px-6 text-center">
      <h2 class="text-lg font-semibold">Maman Adi Firmansyah</h2>
      <div class="flex justify-center space-x-6 mt-6 text-2xl">
        @php
          $sosials = [
            ['https://instagram.com/username', 'Instagram'],
            ['https://github.com/username', 'GitHub'],
            ['https://linkedin.com/in/username', 'LinkedIn']
          ];
        @endphp
        @foreach($sosials as [$url, $label])
        <a href="{{ $url }}" target="_blank" aria-label="{{ $label }}" class="hover:text-green-600 transition">
          <i class="fab fa-{{ strtolower($label) }}"></i>
        </a>
        @endforeach
      </div>
      <p class="text-xs text-gray-500 mt-6">&copy; 2025 Maman Adi Firmansyah. All rights reserved.</p>
    </div>
  </footer>

  {{-- Scripts --}}
  <script>
    function toggleNavbar() {
      document.getElementById("mobile-menu").classList.toggle("hidden");
    }

    // Init Highlight.js
    document.addEventListener("DOMContentLoaded", () => {
      hljs.highlightAll();

      document.querySelectorAll("pre").forEach((pre) => {
        const btn = document.createElement("button");
        btn.innerText = "Copy";
        btn.className = "copy-btn";
        btn.onclick = () => {
          navigator.clipboard.writeText(pre.innerText).then(() => {
            btn.innerText = "Copied!";
            setTimeout(() => btn.innerText = "Copy", 1500);
          });
        };
        pre.appendChild(btn);
      });
    });
  </script>

  {{-- Font Awesome --}}
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
