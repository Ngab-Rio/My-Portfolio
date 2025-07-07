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
        <a href="https://instagram.com/ngabrio_1975" target="_blank" aria-label="Instagram" class="hover:text-green-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M7.75 2A5.75 5.75 0 002 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm6.5-1.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM12 9.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z"/>
          </svg>
        </a>
        <a href="https://github.com/Ngab-Rio" target="_blank" aria-label="GitHub" class="hover:text-green-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M12 2C6.48 2 2 6.48 2 12a10 10 0 006.84 9.54c.5.1.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.61.07-.61 1 .07 1.53 1.04 1.53 1.04.9 1.53 2.36 1.1 2.94.84.1-.66.34-1.1.62-1.36-2.22-.25-4.55-1.1-4.55-4.88 0-1.08.38-1.96 1-2.65-.1-.25-.44-1.3.1-2.7 0 0 .82-.26 2.7 1a9.4 9.4 0 015 0c1.88-1.26 2.7-1 2.7-1 .54 1.4.2 2.45.1 2.7.6.7 1 1.57 1 2.65 0 3.78-2.34 4.63-4.57 4.87.34.3.63.9.63 1.8v2.68c0 .26.18.59.68.49A10 10 0 0022 12c0-5.52-4.48-10-10-10z"/>
          </svg>
        </a>
        <a href="https://linkedin.com/in/maman-adi-firmansyah-b837712b9" target="_blank" aria-label="LinkedIn" class="hover:text-green-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
            <path d="M19 3A2 2 0 0121 5v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14zm-9.75 14v-5.5H7.5v5.5h1.75zm-1.5-6.3a1.02 1.02 0 110-2.05 1.02 1.02 0 010 2.05zm8.25 6.3v-3c0-1.58-1.82-1.46-1.82 0v3h1.82z"/>
          </svg>
        </a>
      </div>
      
      <div class="flex justify-center py-6 mb-6">
        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2fuYa3Lx06QQJAm0MjztKr?utm_source=generator" width="300" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
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
