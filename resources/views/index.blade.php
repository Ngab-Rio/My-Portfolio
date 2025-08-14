<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="src/assets/logo-removebg-preview.png" type="image/png">
  <title>NgabRio | Home</title>
  
  <!-- External Resources -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
  
  <style>
    html {
      scroll-behavior: smooth;
    }
    .nav-active::after {
      width: 100% !important;
    }
    .neon-ring {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 288px;
      height: 288px;
      border-radius: 50%;
      border: 4px solid #22c55e;
      box-shadow: 0 0 12px #22c55e, 0 0 24px #4ade80, 0 0 36px #22c55e;
      transform: translate(-50%, -50%);
      animation: neon-rotate 4s linear infinite;
      pointer-events: none;
      z-index: 5;
    }
    @keyframes neon-rotate {
      from { transform: translate(-50%, -50%) rotate(0deg); }
      to { transform: translate(-50%, -50%) rotate(360deg); }
    }
  </style>
</head>

<body class="bg-gray-900 text-white" style="font-family: 'Fira Code', monospace;">
  <!-- HEADER -->
  <header class="bg-gray-800/50 backdrop-blur-md shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-2xl font-bold">Ngab-Rio.</h1>
      <button class="md:hidden text-2xl" onclick="toggleNavbar()">&#9776;</button>
      
      <nav class="hidden md:flex space-x-6 font-medium">
        <a href="#home" class="nav-link relative inline-block pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600 after:transition-all after:duration-300 hover:after:w-full">
          Home
        </a>
        <a href="#about" class="nav-link relative inline-block pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600 after:transition-all after:duration-300 hover:after:w-full">
          About
        </a>
        <a href="#blog" class="nav-link relative inline-block pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600 after:transition-all after:duration-300 hover:after:w-full">
          Blog
        </a>
        <a href="#project" class="nav-link relative inline-block pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600 after:transition-all after:duration-300 hover:after:w-full">
          Projects
        </a>
        <a href="#contact" class="nav-link relative inline-block pb-1 after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600 after:transition-all after:duration-300 hover:after:w-full">
          Contact
        </a>
      </nav>
    </div>
    
    <div id="mobile-menu" class="md:hidden hidden flex-col px-6 pb-4 bg-gray-800 space-y-2 font-medium">
      <a href="#home" class="hover:text-green-500">Home</a>
      <a href="#about" class="hover:text-green-500">About</a>
      <a href="#blog" class="hover:text-green-500">Blog</a>
      <a href="#project" class="hover:text-green-500">Projects</a>
      <a href="#contact" class="hover:text-green-500">Contact</a>
    </div>
  </header>

  <!-- MAIN CONTENT -->
  <main class="max-w-7xl mx-auto px-6 pt-32 pb-16">
    <!-- HOME SECTION -->
    <section id="home" class="mb-20 flex flex-col md:flex-row items-center gap-10 py-20">
      <div class="relative inline-block md:w-1/2 flex justify-center">
        <div class="neon-ring"></div>
        <img src="src/assets/pp.png" alt="Profile Photo" class="rounded-full w-60 h-60 md:w-72 md:h-72 object-cover relative z-10 border-4 border-gray-900">
      </div>
      
      <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
          Hi, It's <span class="text-green-600">Maman</span>
        </h1>
        <h5 class="text-xl md:text-xl font-extrabold mb-4">
          I'm a <span id="typing" class="border-r-2 border-green-600 pr-1 text-green-600"></span>
        </h5>
        <p class="text-base max-w-md mx-auto md:mx-0">
          Saya seorang IT Enthusiast yang bersemangat dalam menjelajahi tren teknologi terbaru, coding, dan menciptakan solusi digital yang inovatif.
        </p>
        
        <div class="flex justify-center md:justify-start space-x-6 mt-6 text-2xl">
          <a href="https://instagram.com/maman.ngabrio" target="_blank" aria-label="Instagram" class="hover:text-green-600 transition">
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
      </div>
    </section>

<!-- ABOUT SECTION -->
<section id="about" class="mb-20 py-20">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6 text-center text-green-500 underline decoration-green-500">
      About Me
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <!-- Tentang Saya -->
      <div class="space-y-6">
        <!-- Siapa Saya -->
<div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700 shadow-lg hover:border-green-500/50 transition duration-300">
  <h3 class="text-xl font-semibold mb-4 text-green-400 flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9 9 0 1118.88 6.196 9 9 0 015.12 17.804z" />
    </svg>
    Who am i?
  </h3>
  <p class="text-gray-300 mb-4">
    Nama saya <span class="text-green-400 font-medium">Maman Adi Firmansyah</span>, 
    seorang <span class="italic">IT Network Engineer</span> dengan fokus pada 
    desain, implementasi, dan pengelolaan infrastruktur jaringan, administrasi Linux, 
    serta integrasi berbagai teknologi jaringan seperti MikroTik dan Cisco.
  </p>
  <p class="text-gray-300">
    Saya memiliki ketertarikan pada keamanan siber dan otomasi sistem, serta aktif membangun 
    komunitas teknologi sebagai Founder <span class="text-green-400">THPSEC</span>.
  </p>
</div>


        <!-- Tech Stack -->
        <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700 shadow-lg hover:border-green-500/50 transition duration-300">
          <h3 class="text-xl font-semibold mb-4 text-green-400 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6h4" />
            </svg>
            Technology & Tools
          </h3>
          <div class="flex flex-wrap gap-3">
            <span class="px-3 py-1 bg-gray-700 hover:bg-green-500/20 rounded-full text-sm text-gray-300 transition flex items-center gap-1">
              <img src="src/assets/mikrotik.png" alt="MikroTik" class="w-4 h-4">
              MikroTik
            </span>
            <span class="px-3 py-1 bg-gray-700 hover:bg-green-500/20 rounded-full text-sm text-gray-300 transition flex items-center gap-1">
              <img src="src/assets/linux.png" alt="Linux" class="w-4 h-4">
              Linux Administration
            </span>
            <span class="px-3 py-1 bg-gray-700 hover:bg-green-500/20 rounded-full text-sm text-gray-300 transition flex items-center gap-1">
              <img src="src/assets/php.png" alt="PHP" class="w-4 h-4">
              PHP
            </span>
            <span class="px-3 py-1 bg-gray-700 hover:bg-green-500/20 rounded-full text-sm text-gray-300 transition flex items-center gap-1">
              <img src="src/assets/python.png" alt="Python" class="w-4 h-4">
              Python
            </span>
            <span class="px-3 py-1 bg-gray-700 hover:bg-green-500/20 rounded-full text-sm text-gray-300 transition flex items-center gap-1">
              <img src="src/assets/docker.png" alt="Docker" class="w-4 h-4">
              Docker
            </span>
            <span class="px-3 py-1 bg-gray-700 hover:bg-green-500/20 rounded-full text-sm text-gray-300 transition flex items-center gap-1">
              <img src="src/assets/laravel.png" alt="Laravel" class="w-4 h-4">
              Laravel
            </span>
            <span class="px-3 py-1 bg-gray-700 hover:bg-green-500/20 rounded-full text-sm text-gray-300 transition flex items-center gap-1">
              <img src="src/assets/cisco.png" alt="Cisco" class="w-4 h-4">
              Cisco
            </span>
          </div>
        </div>
      </div>

      <!-- Pendidikan -->
      <div>
        <div class="bg-gray-800/50 p-6 rounded-xl border border-gray-700 shadow-lg hover:border-green-500/50 transition duration-300 h-full">
          <h3 class="text-xl font-semibold mb-6 text-green-400">Education</h3>
          <div class="relative border-l border-green-400/50 pl-6 space-y-8">
            <!-- SMK -->
            <div class="relative">
              <div class="timeline-dot"></div>
              <div class="pl-4">
                <h4 class="text-lg font-semibold text-white">SMK Tunas Harapan Pati</h4>
                <p class="text-sm text-gray-400 italic">Teknik Jaringan Komputer dan Telekomunikasi (2022 – 2025)</p>
                <p class="text-gray-300 text-sm mt-2">
                  Berfokus pada infrastruktur jaringan, administrasi Linux, konfigurasi perangkat Mikrotik & Cisco,
                  pengelolaan Docker, serta keamanan jaringan. Founder THPSEC, komunitas keamanan siber yang aktif
                  dalam pengembangan keterampilan keamanan digital.
                </p>
                <div class="mt-3 space-y-2">
                  <div class="flex items-start">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-900/50 text-green-400">🏅</span>
                    <span class="text-sm text-green-400 ml-2">Peringkat 4 LKS Cyber Security Tingkat Provinsi Jawa Tengah</span>
                  </div>
                  <div class="flex items-start">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-900/50 text-green-400">🏅</span>
                    <span class="text-sm text-green-400 ml-2">Finalis WreckIT 5.0 CTF Kategori Pelajar – Politeknik Sandi Siber Negara</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Universitas -->
            <div class="pl-4 mt-3">
              <h4 class="text-lg font-semibold text-white">Universitas Teknologi Yogyakarta</h4>
              <p class="text-sm text-gray-400 italic">Teknik Komputer (2025 - 2029)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- BLOG SECTION -->
    <section id="blog" class="mb-20 py-40">
      <h2 class="text-3xl font-semibold mb-6 text-center text-green-500 underline decoration-green-500">Blog</h2>
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @php
        $parsedown = new Parsedown();
        @endphp
        @foreach($blogs as $blog)
        <article class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-xl font-bold mb-2 text-green-400">{!! Str::limit(strip_tags($parsedown->text($blog->judul)), 25, '...')  !!}</h3>
          <p class="text-gray-300 mb-4">{!! Str::limit(strip_tags($parsedown->text($blog->deskripsi)), 100, '...') !!}</p>
          <a href="{{ url('blog/'. $blog->id) }}" class="text-green-500 hover:text-green-400 mt-4">Baca Selengkapnya &rarr;</a>
        </article>
        @endforeach
      </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="project" class="mb-20 py-20">
      <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl font-semibold mb-6 text-center text-green-500 underline decoration-green-500">My Projects</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach($projects as $project)
          <!-- Project 1 -->
          <a href="{{ $project->link }}" class="project-card bg-gray-800/50 rounded-xl overflow-hidden border border-gray-700">
            <div class="h-48 overflow-hidden">
              <img src="{{ asset('storage/' .  $project->thumbnail) }}" alt="THPCTF Project" class="w-full h-full object-cover hover:scale-105 transition duration-500">
            </div>
            <div class="p-5">
              <h3 class="text-xl font-bold text-green-400 mb-2">{{ $project->nama_project }}</h3>
              <p class="text-gray-400 text-sm">
                {{ $project->deskripsi_project }}
              </p>
              <div class="mt-4 flex flex-wrap gap-2">
                @foreach(explode(',', $project->tech_stack) as $tech_stack)
                  <span class="px-2 py-1 bg-gray-700 rounded text-xs text-gray-300">{{ trim($tech_stack) }}</span>
                @endforeach
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="mb-20 py-40">
      <div class="bg-gray-800 max-w-2xl mx-auto p-8 rounded-2xl shadow-md">
        <h2 class="text-3xl font-semibold text-center text-green-500 mb-6 underline decoration-green-500">Contact Me</h2>
        
        @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)" x-transition class="bg-green-600 text-white px-4 py-3 rounded mb-5 shadow-lg">
          <div class="flex items-center justify-between">
            <p>{{ session('success') }}</p>
            <button @click="show = false" class="text-white hover:text-gray-200 text-lg font-bold">&times;</button>
          </div>
        </div>
        @endif
        
        <form action="{{ route('contact.store') }}" method="POST">
          @csrf
          
          <div>
            <label for="nama" class="block mb-1 font-medium">Name</label>
            <input type="text" id="nama" name="nama" required class="w-full bg-gray-700 text-white p-2 rounded outline-none" placeholder="Your name">
          </div>

          <div class="py-6">
            <label for="email" class="block mb-1 font-medium">Email</label>
            <input type="email" id="email" name="email" required class="w-full bg-gray-700 text-white p-2 rounded outline-none" placeholder="you@example.com">
          </div>

          <div>
            <label for="deskripsi" class="block mb-1 font-medium">Message</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" required class="w-full bg-gray-700 text-white p-2 rounded outline-none resize-none mb-7" placeholder="Your message..."></textarea>
          </div>

          <button type="submit" class="w-full bg-green-600 hover:bg-green-500 text-white py-3 rounded font-semibold">
            Send Message
          </button>
        </form>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="bg-gray-800 text-white py-8 mt-20 border-t border-gray-700">
    <div class="max-w-screen-xl mx-auto px-6 text-center">
      <h2 class="text-lg font-semibold">Maman Adi Firmansyah</h2>
      
      <div class="flex justify-center space-x-6 mt-6 text-2xl">
        <a href="https://instagram.com/maman.ngabrio" target="_blank" aria-label="Instagram" class="hover:text-green-600 transition">
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

  <!-- SCRIPTS -->
  <script>
    // Toggle mobile menu
    function toggleNavbar() {
      const menu = document.getElementById("mobile-menu");
      menu.classList.toggle("hidden");
    }

    // Highlight active nav link on scroll
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll("nav a");

    window.addEventListener("scroll", () => {
      let current = "";
      sections.forEach((section) => {
        const sectionTop = section.offsetTop - 120;
        const sectionHeight = section.offsetHeight;
        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
          current = section.getAttribute("id");
        }
      });
      
      navLinks.forEach((link) => {
        link.classList.remove("nav-active");
        if (link.getAttribute("href") === `#${current}`) {
          link.classList.add("nav-active");
        }
      });
    });

    // Typing animation
    const roles = [
      "Web Developer",
      "Network Engineer",
      "Freelancer",
      "Programmer",
      "Tech Enthusiast",
      "DevOps",
      "Cyber Security Analyst"
    ];
    const typingElement = document.getElementById("typing");

    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function type() {
      const current = roles[wordIndex];
      const displayed = current.substring(0, charIndex);

      typingElement.textContent = displayed;

      if (!isDeleting && charIndex < current.length) {
        charIndex++;
        setTimeout(type, 120);
      } else if (isDeleting && charIndex > 0) {
        charIndex--;
        setTimeout(type, 60);
      } else {
        isDeleting = !isDeleting;
        if (!isDeleting) wordIndex = (wordIndex + 1) % roles.length;
        setTimeout(type, 1000);
      }
    }

    type();
  </script>
</body>
</html>
