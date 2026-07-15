<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lounusa Beach Resort - Our Facilities</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>">
  <script src="<?php echo asset('js/main.js'); ?>" defer></script>

  <style>
    html {
      scroll-behavior: smooth;
    }
    .font-serif-lux {
      font-family: 'Georgia', Georgia, Cambria, "Times New Roman", Times, serif;
    }
  </style>
</head>
<body class="font-sans text-[#0B2530] bg-[#F4EFE6]">
  <?php
  // Pastikan session sudah dimulai di bagian paling atas file index/header Anda
  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }
  ?>
  <!-- ================= NAVBAR ================= -->
  <header class="sticky top-0 z-50 bg-[#F4EFE6]/90 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-8 py-4 relative">
      <h1 class="text-xl font-medium tracking-widest font-serif-luxury text-[#0B2530]">
        <a href="/home">Lounusa Beach Resort</a>
      </h1>
      
      <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
        <a href="/home" class="hover:text-[#C2A878] transition">Home</a>
        <a href="/profil" class="hover:text-[#C2A878] transition">About Us</a>
        <a href="/kamar-laut" class="hover:text-[#C2A878] transition">Rooms</a>
        <a href="/fasilitas" class="text-[#0B2530] border-b-2 border-[#0B2530] pb-1 ">Facilities</a>
        <a href="/contact" class="hover:text-[#C2A878] transition">Contact</a>
      </nav>
      
      <div class="flex items-center gap-2">
        @if(!Session::has('logged_in'))
          <a href="{{ route('login') }}" class="bg-[#0B2530] text-white px-6 py-2.5 rounded-full text-xs font-medium tracking-wider uppercase hover:bg-opacity-90 transition shadow-sm ml-4">
            Login
          </a>
        @else
          <a href="{{ route('logout') }}" class="flex items-center gap-2 text-xs font-light tracking-widest text-gray-600 uppercase hover:text-red-600 transition ml-4">
            <span>Logout</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H8.25" />
            </svg>
          </a>
        @endif

        <button id="contact-menu-btn" type="button" class="inline-flex md:hidden items-center justify-center p-2 rounded-md text-[#0B2530] hover:bg-[#0B2530]/10 focus:outline-none transition ml-2">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <div id="contact-mobile-menu" class="hidden absolute top-full left-0 w-full bg-[#0B2530]/95 backdrop-blur-md border-b border-gray-800 shadow-xl py-4 px-8 flex flex-col space-y-4 text-xs tracking-widest uppercase text-white/90 font-light md:hidden transition-all duration-300">
        <a href="/home" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">Home</a>
        <a href="/profil" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">About Us</a>
        <a href="/kamar-laut" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">Rooms</a>
        <a href="/fasilitas" class="text-[#C2A878] py-1">Facilities</a>
        <a href="/contact" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">Contact</a>
      </div>
    </div>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const contactBtn = document.getElementById('contact-menu-btn');
      const contactMenu = document.getElementById('contact-mobile-menu');

      if (contactBtn && contactMenu) {
        contactBtn.addEventListener('click', function () {
          contactMenu.classList.toggle('hidden');
        });
      }
    });
  </script>

  <!-- ================= HERO ================= -->
  <div class="relative bg-cover bg-center bg-no-repeat min-h-[440px] flex items-center justify-start overflow-hidden rounded-3xl mx-4 md:mx-8 mt-4 shadow-sm">
    <img src="<?php echo asset('images/gallery/pantai.jpg'); ?>" class="w-full h-full object-cover absolute inset-0" />
    <div class="absolute inset-0 bg-black/20"></div>
    
    <div class="relative z-10 text-left px-8 md:px-16 max-w-2xl">
      <span class="text-white text-[11px] font-semibold uppercase tracking-widest block mb-2 opacity-90">Elevated Living</span>
      <h1 class="text-4xl md:text-6xl font-serif-lux text-white mb-4 tracking-wide drop-shadow-sm">
        Our Facilities
      </h1>
      <p class="text-xs md:text-sm text-white/90 font-light leading-relaxed max-w-md drop-shadow-sm">
        Everything you need for a relaxing and unforgettable beachside escape, curated with coastal sophistication.
      </p>
    </div>
  </div>

  <!-- ================= FACILITIES SECTION ================= -->
  <section class="max-w-6xl mx-auto px-6 py-24">
    <div class="grid md:grid-cols-12 gap-12 items-start">
      
      <!-- Left Side Title Content -->
      <div class="md:col-span-4 md:sticky md:top-28">
        <h2 class="text-2xl md:text-3xl font-serif-lux text-[#0B2530] leading-tight mb-4">
          Designed for Seamless<br>Tranquility
        </h2>
        <p class="text-xs text-gray-500 leading-relaxed font-light">
          From business connectivity to morning indulgence, we provide the essentials of a premium stay within our serene coastal environment.
        </p>
      </div>

      <!-- Right Side Cards (Staggered Layout) -->
      <!-- Right Side Cards (Sama Rata / Sejajar Rapi) -->
      <div class="md:col-span-8 grid md:grid-cols-2 gap-6">
        
        <!-- WIFI (Card 1) -->
        <div class="bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.02)] flex flex-col justify-between min-h-[220px]">
          <div class="w-10 h-10 rounded-xl bg-[#F4EFE6] flex items-center justify-center text-[#2C7A7B] mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a10.5 10.5 0 0114.14 0M1.414 6.586a16.5 16.5 0 0121.172 0" /></svg>
          </div>
          <div>
            <h4 class="text-base font-semibold text-[#0B2530] mb-2">WIFI</h4>
            <p class="text-xs text-gray-400 leading-relaxed font-light">Free high-speed internet access in all rooms and common areas, keeping you connected to what matters.</p>
          </div>
        </div>

        <!-- Free Breakfast (Card 2) -->
        <div class="bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.02)] flex flex-col justify-between min-h-[220px]">
          <div class="w-10 h-10 rounded-xl bg-[#F4EFE6] flex items-center justify-center text-[#2C7A7B] mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M14 12a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
          </div>
          <div>
            <h4 class="text-base font-semibold text-[#0B2530] mb-2">Free Breakfast</h4>
            <p class="text-xs text-gray-400 leading-relaxed font-light">Complimentary breakfast served daily, featuring local delicacies and international favorites by the water.</p>
          </div>
        </div>

        <!-- Parking Spot (Card 3) -->
        <div class="bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.02)] flex flex-col justify-between min-h-[220px]">
          <div class="w-10 h-10 rounded-xl bg-[#F4EFE6] flex items-center justify-center text-[#2C7A7B] mb-6 font-bold text-sm">P</div>
          <div>
            <h4 class="text-base font-semibold text-[#0B2530] mb-2">Parking Spot</h4>
            <p class="text-xs text-gray-400 leading-relaxed font-light">Spacious and secure free parking available for guests, ensuring peace of mind during your coastal retreat.</p>
          </div>
        </div>

        <!-- Ruang Meeting (Card 4) -->
        <div class="bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.02)] flex flex-col justify-between min-h-[220px]">
          <div class="w-10 h-10 rounded-xl bg-[#F4EFE6] flex items-center justify-center text-[#2C7A7B] mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
          </div>
          <div>
            <h4 class="text-base font-semibold text-[#0B2530] mb-2">Ruang Meeting</h4>
            <p class="text-xs text-gray-400 leading-relaxed font-light">Spacious and modern meeting room available for business seminars, workshops, and private exclusive events.</p>
          </div>
        </div>

        <!-- Comfort Room (Card 5 - Lebar Penuh) -->
        <div class="bg-white p-8 rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.02)] flex items-center gap-6 min-h-[120px] md:col-span-2">
          <div class="w-10 h-10 rounded-xl bg-[#F4EFE6] flex-shrink-0 flex items-center justify-center text-[#2C7A7B]">
            <svg xmlns="http://www.w3.org/2000/xl" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg>
          </div>
          <div>
            <h4 class="text-base font-semibold text-[#0B2530] mb-1">Comfort Room</h4>
            <p class="text-xs text-gray-400 leading-relaxed font-light">Well-equipped, pristine comfort rooms strategically located for maximum guest convenience and refreshing accessibility throughout the day.</p>
          </div>
        </div>

      </div>
  </section>

  <!-- ================= CTA ================= -->
  <section class="bg-[#0B2530] text-center text-white py-20 px-6 mx-4 md:mx-8 rounded-3xl shadow-sm">
    <h3 class="text-2xl md:text-3xl font-serif-lux text-white mb-4 tracking-wide">
      Enjoy Comfort by the Beach
    </h3>
    <p class="text-xs text-gray-300 max-w-lg mx-auto mb-8 font-light leading-relaxed">
      Have questions about our amenities or specific requirements for your stay? Our dedicated concierge team is ready to assist you.
    </p>
    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
      <a href="https://wa.me/6285388882379" target="_blank" class="px-6 py-3 rounded-full bg-[#2C7A7B] text-white text-xs font-semibold tracking-wider uppercase hover:bg-opacity-90 transition shadow-sm flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12 3 7.582 7.03 4 12 4s9 3.582 9 8z" /></svg>
        <span>Chat via WhatsApp</span>
      </a>
      <a href="/contact" class="text-xs text-white/80 hover:text-white font-medium underline tracking-wider">
        Visit Contact Page &rarr;
      </a>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer class="text-[#9fa3a4] text-xs py-20 px-8 md:px-16 mt-12 bg-[#0B2530]">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
      <div>
        <h4 class="text-base font-serif-lux text-[#ffffff] font-bold mb-4">Lounusa Beach Resort</h4>
        <p class="text-gray-400 font-light leading-relaxed max-w-[200px]">Sustainable luxury on the shore of tranquility. Redefining the island escape.</p>
      </div>
      <div>
        <h5 class="text-[#ffffff] font-semibold uppercase tracking-wider text-[11px] mb-4">Resort</h5>
        <ul class="space-y-2 font-light">
          <li><a href="#" class="hover:text-[#0B2530]">Our Story</a></li>
          <li><a href="#" class="hover:text-[#0B2530]">Sustainability</a></li>
        </ul>
      </div>
      <div>
        <h5 class="text-[#ffffff] font-semibold uppercase tracking-wider text-[11px] mb-4">Connect</h5>
        <div class="flex gap-3 mb-4">
          <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-gray-400 hover:text-[#0B2530]">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
          </a>
          <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-sm text-gray-400 hover:text-[#0B2530]">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
        </div>
        <p class="text-[10px] text-gray-400 font-light">&copy; 2026 Lounusa Beach Resort. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Floating Sticky Chat Icon -->
  <div class="fixed bottom-6 right-6 z-50">
    <a href="https://wa.me/6285388882379" target="_blank" class="w-12 h-12 rounded-full bg-[#2C7A7B] flex items-center justify-center text-white hover:scale-110 transition shadow-lg">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12 3 7.582 7.03 4 12 4s9 3.582 9 8z" />
      </svg>
    </a>
  </div>

</body>
</html>