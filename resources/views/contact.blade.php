<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lounusa Beach Resort - Contact Us</title>

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
<header class="sticky top-0 z-50 bg-[#F4EFE6]/90 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-8 py-4 relative">
      <h1 class="text-xl font-medium tracking-widest font-serif-luxury text-[#0B2530]">
        <a href="/">Lounusa Beach Resort</a>
      </h1>
      
      <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
        <a href="/" class="hover:text-[#C2A878] transition">Home</a>
        <a href="/profil" class="hover:text-[#C2A878] transition">About Us</a>
        <a href="/kamar-laut" class="hover:text-[#C2A878] transition">Rooms</a>
        <a href="/fasilitas" class="hover:text-[#C2A878] transition">Facilities</a>
        <a href="/contact" class="text-[#0B2530] border-b-2 border-[#0B2530] pb-1">Contact</a>
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
        <a href="/" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">Home</a>
        <a href="/profil" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">About Us</a>
        <a href="/kamar-laut" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">Rooms</a>
        <a href="/fasilitas" class="hover:text-[#C2A878] py-1 border-b border-gray-800/50">Facilities</a>
        <a href="/contact" class="text-[#C2A878] py-1">Contact</a>
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

  <!-- ================= HERO CONTACT ================= -->
  <div class="relative bg-cover bg-center bg-no-repeat min-h-[440px] flex items-center justify-center overflow-hidden rounded-3xl mx-4 md:mx-8 mt-4 shadow-sm">
    <img src="<?php echo asset('images/gallery/sore-saat-air-surut.jpg'); ?>" class="w-full h-full object-cover absolute inset-0" />
    <div class="absolute inset-0 bg-black/30"></div>
    
    <div class="relative z-10 text-center px-6 max-w-2xl">
      <h1 class="text-4xl md:text-5xl font-serif-lux text-white mb-3 tracking-wide drop-shadow-sm">
        Contact Us
      </h1>
      <p class="text-xs md:text-sm text-[#F0DBB2] font-light tracking-wide max-w-xl mx-auto drop-shadow-sm uppercase">
        Coastal Serenity Awaits. We are here to assist with your journey to paradise.
      </p>
    </div>
  </div>

  <!-- ================= CONTACT SECTION ================= -->
<section class="max-w-6xl mx-auto px-6 py-20">
    <div class="grid md:grid-cols-12 gap-12 items-center">
      
      <div class="md:col-span-5 space-y-10">
        <div>
          <h2 class="text-3xl font-serif-lux text-[#0B2530] mb-3">Get in Touch</h2>
          <p class="text-xs text-gray-500 font-light leading-relaxed">
            Sangat senang dapat membantu Anda dengan pertanyaan atau reservasi apa pun.
          </p>
        </div>

        <div class="space-y-8">
          <div class="flex items-start gap-4">
            <div class="mt-1 text-[#2C7A7B]">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <div>
              <h4 class="font-serif-lux text-base font-semibold text-[#0B2530] mb-1">Location</h4>
              <p class="text-xs text-gray-500 font-light leading-relaxed">
                {!! nl2br(e($contact->location_address ?? "Jl. Chr. M. Tiahahu, Amahai, Kec. Amahai,\nKabupaten Maluku Tengah, Maluku,\nIndonesia")) !!}
              </p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-1 text-[#2C7A7B]">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12 3 7.582 7.03 4 12 4s9 3.582 9 8z" />
              </svg>
            </div>
            <div>
              <h4 class="font-serif-lux text-base font-semibold text-[#0B2530] mb-1">WhatsApp</h4>
              <div class="flex flex-col space-y-1 text-xs text-gray-500 font-light">
                @if(!empty($contact->whatsapp_1))
                  <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->whatsapp_1) }}" target="_blank" class="hover:text-[#2C7A7B] transition">{{ $contact->whatsapp_1 }}</a>
                @else
                  <a href="https://wa.me/62811430022" target="_blank" class="hover:text-[#2C7A7B] transition">+62 811-4300-22</a>
                @endif

                @if(!empty($contact->whatsapp_2))
                  <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->whatsapp_2) }}" target="_blank" class="hover:text-[#2C7A7B] transition">{{ $contact->whatsapp_2 }}</a>
                @endif

                @if(!empty($contact->whatsapp_3))
                  <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->whatsapp_3) }}" target="_blank" class="hover:text-[#2C7A7B] transition">{{ $contact->whatsapp_3 }}</a>
                @endif
              </div>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-1 text-[#2C7A7B]">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div>
              <h4 class="font-serif-lux text-base font-semibold text-[#0B2530] mb-1">Email</h4>
              <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $contact->email_address ?? 'Lounusabeachresort@gmail.com' }}" class="text-xs text-gray-500 font-light hover:text-[#2C7A7B] transition">
                {{ $contact->email_address ?? 'Lounusabeachresort@gmail.com' }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- RIGHT CONTENT: MAP LAYOUT FROM IMAGE -->
      <div class="md:col-span-7 relative">
        <!-- Wrapper Peta Bergaya Frame Premium Putih -->
        <div class="bg-white p-4 pb-6 rounded-3xl shadow-xl border border-white overflow-hidden relative">
          
          <div class="text-center text-[10px] text-gray-400 font-medium uppercase tracking-widest mb-3 pt-1">
            Contact Us Map
          </div>
          
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
      </div>

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
          <li><a href="/profil" class="hover:text-[#0B2530]">Our Story</a></li>
          <li><a href="/fasilitas" class="hover:text-[#0B2530]">Sustainability</a></li>
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