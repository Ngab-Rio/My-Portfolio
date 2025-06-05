<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>NgabRio | Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet" />
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
      width: 288px;  /* ukuran image + border + neon */
      height: 288px;
      border-radius: 50%;
      border: 4px solid #22c55e;
      box-shadow:
        0 0 12px #22c55e,
        0 0 24px #4ade80,
        0 0 36px #22c55e;
      transform: translate(-50%, -50%);
      animation: neon-rotate 4s linear infinite;
      pointer-events: none;
      z-index: 5;
    }

    @keyframes neon-rotate {
      from {
        transform: translate(-50%, -50%) rotate(0deg);
      }
      to {
        transform: translate(-50%, -50%) rotate(360deg);
    }
}


  </style>
</head>
<body class="bg-gray-900 text-white font-mono" style="font-family: 'Fira Code', monospace;">

  <!-- HEADER -->
  <header class="bg-gray-800 shadow-md fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
      <h1 class="text-2xl font-bold text-white">Ngab-Rio.</h1>
      <button class="md:hidden text-white text-2xl" onclick="toggleNavbar()">
        &#9776;
      </button>
      <nav class="hidden md:flex space-x-6 text-white font-medium">
         <a href="#home" id="nav-link" class="relative inline-block pb-1
          after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600
          after:transition-all after:duration-300 hover:after:w-full">
          Home
        </a>
        <a href="#about" id="nav-link" class="relative inline-block pb-1
          after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600
          after:transition-all after:duration-300 hover:after:w-full">
          About
        </a>
        <a href="#blog" id="nav-link" class="relative inline-block pb-1
          after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600
          after:transition-all after:duration-300 hover:after:w-full">
          Blog
        </a>
        <a href="#contact" id="nav-link" class="relative inline-block pb-1
          after:absolute after:left-0 after:bottom-0 after:h-[2px] after:w-0 after:bg-green-600
          after:transition-all after:duration-300 hover:after:w-full">
          Contact
        </a>
      </nav>
    </div>
  <div id="mobile-menu" class="md:hidden hidden flex-col px-6 pb-4 bg-gray-800 space-y-2 text-white font-medium">
    <a href="#home" class="hover:text-green-500">Home</a>
    <a href="#about" class="hover:text-green-500">About</a>
    <a href="#blog" class="hover:text-green-500">Blog</a>
    <a href="#contact" class="hover:text-green-500">Contact</a>
  </div>
  </header>

  <main class="max-w-7xl mx-auto px-6 pt-32 pb-16">

    <!-- HOME -->
    <section id="home" class="mb-20 flex flex-col md:flex-row items-center gap-10 py-20">
      <div class="relative inline-block md:w-1/2 flex justify-center">
        <div class="neon-ring"></div>
        <img src="src/assets/foto-removebg-preview.png" alt="Foto Kamu" class="rounded-full w-60 h-60 md:w-72 md:h-72 object-cover relative z-10 border-4 border-gray-900" />
      </div>
      <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
          Hi, It's <span class="text-green-600">Maman</span>
        </h1>
        <h5 class="text-2xl md:text-3xl font-extrabold mb-4">
          I'm a <span id="typing" class="border-r-2 border-green-600 pr-1 text-green-600"></span>
        </h5>
        <p class="text-base max-w-md mx-auto md:mx-0">
          Saya seorang IT Enthusiast yang bersemangat dalam menjelajahi tren teknologi terbaru, coding, dan menciptakan solusi digital yang inovatif.    
        </p>
        <div class="flex justify-center md:justify-start space-x-6 mt-6 text-2xl">
            <a href="https://instagram.com/ngabrio_1975" target="_blank" aria-label="Instagram" class="hover:text-green-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path
                  d="M7.75 2A5.75 5.75 0 002 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm6.5-1.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM12 9.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z"
                />
              </svg>
            </a>
            <a href="https://github.com/Ngab-Rio" target="_blank" aria-label="GitHub" class="hover:text-green-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path
                  d="M12 2C6.48 2 2 6.48 2 12a10 10 0 006.84 9.54c.5.1.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.61.07-.61 1 .07 1.53 1.04 1.53 1.04.9 1.53 2.36 1.1 2.94.84.1-.66.34-1.1.62-1.36-2.22-.25-4.55-1.1-4.55-4.88 0-1.08.38-1.96 1-2.65-.1-.25-.44-1.3.1-2.7 0 0 .82-.26 2.7 1a9.4 9.4 0 015 0c1.88-1.26 2.7-1 2.7-1 .54 1.4.2 2.45.1 2.7.6.7 1 1.57 1 2.65 0 3.78-2.34 4.63-4.57 4.87.34.3.63.9.63 1.8v2.68c0 .26.18.59.68.49A10 10 0 0022 12c0-5.52-4.48-10-10-10z"
                />
              </svg>
            </a>
            <a href="https://linkedin.com/in/username" target="_blank" aria-label="LinkedIn" class="hover:text-green-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path
                  d="M19 3A2 2 0 0121 5v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14zm-9.75 14v-5.5H7.5v5.5h1.75zm-1.5-6.3a1.02 1.02 0 110-2.05 1.02 1.02 0 010 2.05zm8.25 6.3v-3c0-1.58-1.82-1.46-1.82 0v3h1.82z"
                />
              </svg>
            </a>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="px-6 py-40">
      <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-12 text-center text-green-500 underline decoration-green-500 decoration-4">
          About Me
        </h2>
        <p class="text-base leading-relaxed">
          Perkenalkan, nama saya <span class="font-semibold text-green-600">Maman Adi Firmansyah</span>. Saya adalah seorang <span class="italic">IT Network Engineer</span> dan <span class="italic">Junior Cyber Security Specialist</span> yang memiliki fokus pada pengelolaan jaringan yang andal serta perlindungan sistem dari berbagai ancaman siber.
          <br /><br />
          Selain itu, saya juga memiliki ketertarikan besar dalam berbagai bidang IT lainnya seperti <span class="italic">Web Development</span>, <span class="italic">DevOps</span>, dan <span class="italic">automasi sistem</span>. Saya senang mempelajari teknologi baru dan mengerjakan proyek-proyek yang kreatif dan berdampak nyata.
        </p>
      </div>
    </section>

    <!-- BLOG -->
    <section id="blog" class="mb-20 py-40">
      <h2 class="text-3xl font-semibold mb-6 text-center text-green-500 underline decoration-green-500">Blog</h2>
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @php
        $parsedown = new Parsedown();
        @endphp
        @foreach($blogs as $blog)
        <article class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition">
          <h3 class="text-xl font-bold mb-2 text-green-400">{{ $blog->judul }}</h3>
          <p class="text-gray-300 mb-4">{!! Str::limit(strip_tags($parsedown->text($blog->deskripsi)), 100, '...') !!}</p>
          <a href="{{ url('blog/'. $blog->id) }}" class="text-green-500 hover:text-green-400">Baca Selengkapnya &rarr;</a>
        </article>
        @endforeach
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="mb-20  py-40">
      <div class="bg-gray-800 max-w-2xl mx-auto p-8 rounded-2xl shadow-md">
        <h2 class="text-3xl font-semibold text-center text-green-500 mb-6 underline decoration-green-500">Contact Me</h2>
          <div>
            <label for="name" class="block mb-1 font-medium">Name</label>
            <input type="text" id="name" name="name" required class="w-full bg-gray-700 text-white p-2 rounded outline-none" placeholder="Your name" />  
          </div>
          <div class="py-6">
            <label for="email" class="block mb-1 font-medium">Email</label>
            <input type="email" id="email" name="email" required class="w-full bg-gray-700 text-white p-2 rounded outline-none" placeholder="you@example.com" />
          </div>
          <div>
            <label for="message" class="block mb-1 font-medium">Message</label>
            <textarea id="message" name="message" rows="4" required class="w-full bg-gray-700 text-white p-2 rounded outline-none resize-none mb-7" placeholder="Your message..."></textarea>
          </div>
          <button type="button" class="w-full bg-green-600 hover:bg-green-500 text-white py-3 rounded font-semibold">
            Send Message
          </button>
      </div>
    </section>
  </main>

   <footer class="bg-gray-800 text-white py-8 mt-20 border-t border-gray-700">
    <div class="max-w-screen-xl mx-auto px-6 text-center">
      <h2 class="text-lg font-semibold">Maman Adi Firmansyah</h2>
        <div class="flex justify-center md:justify-center space-x-6 mt-6 text-2xl">
            <a href="https://instagram.com/ngabrio_1975" target="_blank" aria-label="Instagram" class="hover:text-green-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path
                  d="M7.75 2A5.75 5.75 0 002 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm6.5-1.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM12 9.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z"
                />
              </svg>
            </a>
            <a href="https://github.com/Ngab-Rio" target="_blank" aria-label="GitHub" class="hover:text-green-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path
                  d="M12 2C6.48 2 2 6.48 2 12a10 10 0 006.84 9.54c.5.1.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.61.07-.61 1 .07 1.53 1.04 1.53 1.04.9 1.53 2.36 1.1 2.94.84.1-.66.34-1.1.62-1.36-2.22-.25-4.55-1.1-4.55-4.88 0-1.08.38-1.96 1-2.65-.1-.25-.44-1.3.1-2.7 0 0 .82-.26 2.7 1a9.4 9.4 0 015 0c1.88-1.26 2.7-1 2.7-1 .54 1.4.2 2.45.1 2.7.6.7 1 1.57 1 2.65 0 3.78-2.34 4.63-4.57 4.87.34.3.63.9.63 1.8v2.68c0 .26.18.59.68.49A10 10 0 0022 12c0-5.52-4.48-10-10-10z"
                />
              </svg>
            </a>
            <a href="https://linkedin.com/in/username" target="_blank" aria-label="LinkedIn" class="hover:text-green-600 transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
                <path
                  d="M19 3A2 2 0 0121 5v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h14zm-9.75 14v-5.5H7.5v5.5h1.75zm-1.5-6.3a1.02 1.02 0 110-2.05 1.02 1.02 0 010 2.05zm8.25 6.3v-3c0-1.58-1.82-1.46-1.82 0v3h1.82z"
                />
              </svg>
            </a>
          </div>
          <div class="flex justify-center py-6 mb-6">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/4XHijJfABTtUCW3Bp6KFvr?utm_source=generator" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media" class="rounded-lg shadow-lg"></iframe>
          </div>
      <p class="text-xs text-gray-500 mt-6">&copy; 2025 Maman Adi Firmansyah. All rights reserved.</p>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script>
    function toggleNavbar() {
      const menu = document.getElementById("mobile-menu");
      menu.classList.toggle("hidden");
    }

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