<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lounusa Beach Resort</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>">
  <script src="<?php echo asset('js/main.js'); ?>" defer></script>

  <style>
    html {
      scroll-behavior: smooth;
    }
    /* Font Playfair Display atau Serif mewah untuk Heading sesuai desain */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..700;1,400..700&display=swap');
    .font-serif-luxury {
      font-family: 'Playfair Display', Georgia, serif;
    }
  </style>
</head>

<body class="bg-[#F9F6F0] font-sans text-gray-800">
  <?php
  // Pastikan session sudah dimulai di bagian paling atas file index/header Anda
  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }
  ?>

  <header class="absolute w-full z-50 bg-transparent">
      <div class="max-w-7xl mx-auto flex justify-between items-center px-8 py-6 relative">
        <h1 class="text-white text-xl font-medium tracking-widest font-serif-luxury">
          <a href="/">Lounusa Beach Resort</a>
        </h1>
        
        <nav class="hidden md:flex gap-8 text-sm text-white/90 font-light tracking-wide items-center">
          <a href="/profil" class="hover:text-[#C2A878] transition">About</a>
          <a href="/kamar-laut" class="hover:text-[#C2A878] transition">Rooms</a>
          <a href="/fasilitas" class="hover:text-[#C2A878] transition">Facilities</a>
          <a href="/contact" class="hover:text-[#C2A878] transition">Contact</a>
        </nav>
        
        <div class="flex items-center gap-2">
          @if(!Session::has('logged_in'))
            <a href="{{ route('login') }}" class="bg-[#0B2530] text-white px-6 py-2.5 rounded-full text-xs font-medium tracking-wider uppercase hover:bg-opacity-90 transition shadow-sm ml-4">
              Login
            </a>
          @else
            <a href="{{ route('logout') }}" class="flex items-center gap-2 text-xs font-light tracking-widest text-[#ffffff] uppercase hover:text-red-600 transition ml-4">
              <span>Logout</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H8.25" />
              </svg>
            </a>
          @endif

          <button id="menu-toggle-btn" type="button" class="inline-flex md:hidden items-center justify-center p-2 rounded-md text-white hover:bg-white/10 focus:outline-none transition ml-2">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        <div id="mobile-dropdown-menu" class="hidden absolute top-full left-0 w-full bg-[#0B2530]/95 backdrop-blur-md border-b border-gray-800 shadow-xl py-4 px-8 flex flex-col space-y-4 text-xs tracking-widest uppercase text-white/90 font-light md:hidden transition-all duration-300">
          <a href="/profil" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">About</a>
          <a href="/kamar-laut" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">Rooms</a>
          <a href="/fasilitas" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">Facilities</a>
          <a href="/contact" class="hover:text-[#C2A878] py-1">Contact</a>
        </div>
      </div>
    </header>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('menu-toggle-btn');
        const menu = document.getElementById('mobile-dropdown-menu');

        if (btn && menu) {
          btn.addEventListener('click', function () {
            menu.classList.toggle('hidden');
          });
        }
      });
    </script>
  </header>

  <section class="relative h-[110vh] bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('<?php echo asset('images/gallery/plang.jpg'); ?>');">
    <div class="absolute inset-0 bg-black/30"></div>
    
    <div class="relative z-10 text-center px-6 max-w-4xl mx-auto mt-20">
      <h2 class="text-5xl md:text-7xl font-serif-luxury tracking-wide mb-4">
        Lounusa Beach Resort
      </h2>
      <p class="italic font-serif-luxury text-xl md:text-2xl text-white/90 mb-10 tracking-wide">
        Your Private Escape by the Sea
      </p>
      
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a href="#rooms" class="w-full sm:w-auto px-8 py-3 bg-[#12222E] text-white text-sm tracking-wider font-medium rounded-full hover:bg-opacity-90 transition shadow-lg">
          Explore Rooms
        </a>
        <a href="https://wa.me/6281284300022" target="_blank" class="w-full sm:w-auto px-8 py-3 bg-white/90 backdrop-blur text-gray-800 text-sm tracking-wider font-medium rounded-full hover:bg-white transition shadow-lg flex items-center justify-center gap-2">
          <span>Chat via WhatsApp</span>
        </a>
      </div>
    </div>
  </section>

  <section id="about" class="py-24 px-8 bg-[#F6F2E9]">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
      <div class="overflow-hidden rounded-2xl shadow-xl">
        <img src="<?php echo asset('images/about/lb.jpg'); ?>" alt="About Resort" class="w-full h-[400px] object-cover hover:scale-105 transition duration-700" />
      </div>
      <div class="space-y-6">
        <span class="text-xs uppercase tracking-widest text-gray-400 font-semibold block">Our Story</span>
        <h3 class="text-3xl md:text-4xl font-serif-luxury text-[#1C2D37] leading-tight">
          A Sanctuary of Natural Elegance
        </h3>
        <p class="text-gray-600 text-base leading-relaxed font-light">
          Located on the pristine coast of Amahai, Lounusa Beach Resort offers a pleasant vacation experience with beautiful views and complete facilities. We represent a perfect blend of tranquility, comfort, and the rare natural beauty of the Maluku archipelago.
        </p>
        <div class="pt-2">
          <a href="/profil" class="inline-flex items-center gap-2 text-sm text-gray-800 font-medium border-b border-gray-800 pb-1 hover:text-[#C2A878] hover:border-[#C2A878] transition">
            Discover Our Heritage <span>→</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="rooms" class="py-24 bg-white px-8">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-16 space-y-2">
        <span class="text-xs uppercase tracking-widest text-gray-400 font-semibold block">Accommodations</span>
        <h3 class="text-3xl md:text-5xl font-serif-luxury text-[#1C2D37]">Luxury Refined for Rest</h3>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        
        <div class="bg-[#F6F2E9]/60 rounded-3xl overflow-hidden shadow-sm flex flex-col justify-between border border-gray-100">
          <div>
            <div class="relative aspect-[4/3] bg-[#E2DCF0] flex items-center justify-center text-purple-400">
              <img src="<?php echo asset('images/kamar/silapa/kamar 1.png'); ?>" class="w-full h-full object-cover" />
              <svg class="w-12 h-12 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 002-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              <span class="absolute top-4 left-4 bg-white/80 backdrop-blur text-[10px] uppercase tracking-wider px-3 py-1 rounded-full text-gray-600 font-medium">Rp 330.000 - Rp 440.000 / night</span>
            </div>
            <div class="p-8 space-y-4">
              <h4 class="text-2xl font-serif-luxury text-[#1C2D37]">Deluxe Room</h4>
              <ul class="text-sm text-gray-600 space-y-2.5 font-light">
                <li class="flex items-center gap-3 font-light"><span>King Size Beds</span></li>
                <li class="flex items-center gap-3 font-light"><span>Free High-speed Wi-Fi</span></li>
                <li class="flex items-center gap-3 font-light"><span>Private Luxury Bathroom</span></li>
              </ul>
            </div>
          </div>
          <div class="p-8 pt-0">
            <a href="/kamar-laut" class="block w-full text-center py-3 border border-gray-300 rounded-xl text-sm font-medium hover:bg-[#1C2D37] hover:text-white transition">
              View Details
            </a>
          </div>
        </div>

        <div class="bg-[#F6F2E9]/60 rounded-3xl overflow-hidden shadow-sm flex flex-col justify-between border border-gray-100">
          <div>
            <div class="relative aspect-[4/3] overflow-hidden">
              <img src="<?php echo asset('images/kamar/singaro/kamar1.jpg'); ?>" class="w-full h-full object-cover" />
              <span class="absolute top-4 left-4 bg-white/80 backdrop-blur text-[10px] uppercase tracking-wider px-3 py-1 rounded-full text-gray-600 font-medium">Rp 550.000 / night</span>
            </div>
            <div class="p-8 space-y-4">
              <h4 class="text-2xl font-serif-luxury text-[#1C2D37]">Suite Room</h4>
              <ul class="text-sm text-gray-600 space-y-2.5 font-light">
                <li class="flex items-center gap-3 font-light"><span>King Size Beds</span></li>
                <li class="flex items-center gap-3 font-light"><span>Private Ocean Terrace</span></li>
                <li class="flex items-center gap-3 font-light"><span>Climate Controlled</span></li>
              </ul>
            </div>
          </div>
          <div class="p-8 pt-0">
            <a href="/kamar-laut" class="block w-full text-center py-3 border border-gray-300 rounded-xl text-sm font-medium hover:bg-[#1C2D37] hover:text-white transition">
              View Details
            </a>
          </div>
        </div>

        <div class="bg-[#F6F2E9]/60 rounded-3xl overflow-hidden shadow-sm flex flex-col justify-between border border-gray-100">
          <div>
            <div class="relative aspect-[4/3] overflow-hidden">
              <img src="<?php echo asset('images/kamar/Tuna/kamar1.jpg'); ?>" class="w-full h-full object-cover" />
              <span class="absolute top-4 left-4 bg-white/80 backdrop-blur text-[10px] uppercase tracking-wider px-3 py-1 rounded-full text-gray-600 font-medium">Rp 660.000 / night</span>
            </div>
            <div class="p-8 space-y-4">
              <h4 class="text-2xl font-serif-luxury text-[#1C2D37]">Executive Room</h4>
              <ul class="text-sm text-gray-600 space-y-2.5 font-light">
                <li class="flex items-center gap-3 font-light"><span>Two Double Beds</span></li>
                <li class="flex items-center gap-3 font-light"><span>Mini Bar & Television</span></li>
                <li class="flex items-center gap-3 font-light"><span>24/7 Priority Service</span></li>
              </ul>
            </div>
          </div>
          <div class="p-8 pt-0">
            <a href="/kamar-laut" class="block w-full text-center py-3 border border-gray-300 rounded-xl text-sm font-medium hover:bg-[#1C2D37] hover:text-white transition">
              View Details
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="location" class="py-24 bg-[#0D1B23] text-white px-8 relative overflow-hidden">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center relative z-10">
      
      <div class="space-y-8">
        <div class="space-y-2">
          <span class="text-xs uppercase tracking-widest text-[#00AEC7] font-semibold block">Our Location</span>
          <h3 class="text-3xl md:text-5xl font-serif-luxury text-white">Escape to Amahai</h3>
        </div>
        
        <div class="space-y-6 text-sm text-white/80 font-light">
          <div class="flex gap-4 items-start">
            <span class="text-lg"></span>
            <p class="leading-relaxed">
              Jl. Chr. M. Tiahahu, Amahai, Kec. Amahai,<br>
              Kabupaten Maluku Tengah, Maluku,<br>
              Indonesia
            </p>
          </div>
          <div class="flex gap-4 items-start">
            <span class="text-lg"></span>
            <p class="leading-relaxed">
              Easily accessible from the city center, surrounded by beautiful mountain scenery and fresh air.
            </p>
          </div>
        </div>

        <div class="pt-4">
          <a href="https://maps.app.goo.gl/vbecnWhnqyeKaab3A" target="_blank" class="inline-flex items-center justify-center px-6 py-3 bg-white text-gray-900 text-xs uppercase tracking-wider font-semibold rounded-full hover:bg-opacity-90 transition shadow-md">
            Open in Google Maps
          </a>
        </div>
      </div>

      <div class="bg-white p-4 pb-6 rounded-3xl shadow-xl border border-white overflow-hidden relative">
        <!-- Efek grayscale dan contrast-[1.1] sudah dihapus agar warna map kembali normal -->
        <div class="w-full h-[380px] rounded-2xl overflow-hidden relative">
          <iframe
            class="w-full h-full border-0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.1455146526664!2d128.93671319999999!3d-3.3141782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6b99b76ac0fb93%3A0xbaafbc1bbad7d467!2sLounusa%20Beach%20Resort!5e0!3m2!1sen!2sid!4v1768576185859!5m2!1sen!2sid"
            loading="lazy"
            allowfullscreen=""
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
    </div>
  </section>

  <footer class="bg-[#0A141A] text-white/60 py-16 px-8 text-sm border-t border-white/5">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-10 mb-12">
      <div class="space-y-4 col-span-2 md:col-span-1">
        <h4 class="text-white text-lg font-serif-luxury tracking-widest">Lounusa</h4>
        <p class="text-xs font-light leading-relaxed max-w-xs">
          A tropical sanctuary where luxury meets natural purity. Experience the authentic beauty of Maluku's coastline.
        </p>
      </div>
      <div class="space-y-3">
        <h5 class="text-white text-xs uppercase tracking-wider font-semibold">Explore</h5>
        <ul class="space-y-2 text-xs font-light">
          <li><a href="/profil" class="hover:text-white transition">About Us</a></li>
          <li><a href="/fasilitas" class="hover:text-white transition">Facilities</a></li>
          <li><a href="/kamar-laut" class="hover:text-white transition">Rooms</a></li>
        </ul>
      </div>
      <div class="space-y-3">
        <h5 class="text-white text-xs uppercase tracking-wider font-semibold">Discovery</h5>
        <ul class="space-y-2 text-xs font-light">
          <li><a href="/contact" class="hover:text-white transition">Location</a></li>
        </ul>
      </div>
      <div class="space-y-3">
        <h5 class="text-white text-xs uppercase tracking-wider font-semibold">Connect</h5>
        <div class="flex gap-4 text-xs font-light">
          <a href="https://wa.me/6285388882379" target="_blank" class="btn-primary hover:text-white transition"> Check Availability via WhatsApp </a>
        </div>
      </div>
    </div>
    
    <div class="max-w-7xl mx-auto pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-light">
      <p>© 2026 Lounusa Beach Resort. All rights reserved.</p>
    </div>
  </footer>

  <a href="https://wa.me/6281284300022" target="_blank" class="fixed bottom-6 right-6 bg-[#00AEC7] text-white p-4 rounded-full shadow-xl hover:scale-110 transition z-50">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.411 0 11.989 0c3.183.001 6.177 1.242 8.432 3.499 2.254 2.256 3.493 5.252 3.492 8.435-.005 6.581-5.356 11.93-11.932 11.93-1.999-.001-3.965-.503-5.714-1.46L0 24zm6.298-3.662l.365.217c1.614.958 3.473 1.464 5.37 1.465 5.437 0 9.858-4.403 9.862-9.84a9.785 9.785 0 0 0-2.87-6.934 9.792 9.792 0 0 0-6.953-2.868c-5.441 0-9.862 4.405-9.866 9.843-.001 2.01.527 3.974 1.53 5.723l.238.411-1.01 3.693 3.794-.982z"/></svg>
  </a>

</body>
</html>