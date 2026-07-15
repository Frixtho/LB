<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Jika pengguna sudah login, langsung alihkan ke halaman utama agar tidak bisa akses form login lagi
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: /home");
    exit;
}

$error_message = "";

// Simulasi handling form login sederhana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // CONTOH VALIDASI SEDERHANA (Silakan sesuaikan dengan database Anda nanti)
    if ($email === "admin@lounusa.com" && $password === "password123") {
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $email;
        header("Location: /home");
        exit;
    } else {
        $error_message = "Email atau password yang Anda masukkan salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lounusa Beach Resort - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .font-serif-lux {
      font-family: 'Georgia', Georgia, Cambria, "Times New Roman", Times, serif;
    }
  </style>
</head>
<body class="font-sans text-[#0B2530] bg-[#F4EFE6] min-h-screen flex flex-col justify-between">

  <!-- Header Nav (Sama dengan layout di gambar mockup) -->
  <header class="sticky top-0 z-50 bg-[#F4EFE6]/90 shadow-sm">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-8 py-4">
      <h1 class="text-xl font-medium tracking-widest font-serif-luxury text-[#0B2530]">
        <a href="/home">Lounusa Beach Resort</a>
      </h1>
      <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
        <a href="/home" class="hover:text-[#C2A878] transition">Home</a>
        <a href="/profil" class="hover:text-[#C2A878] transition">About us</a>
        <a href="/kamar-laut" class="hover:text-[#C2A878] transition">Rooms</a>
        <a href="/fasilitas" class="hover:text-[#C2A878] transition">Facilities</a>
        <a href="/contact" class="hover:text-[#C2A878] transition">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Main Login Container dengan Background Blur Halus -->
  <main class="flex-grow flex items-center justify-center py-12 px-4 relative bg-cover bg-center" style="background-image: linear-gradient(rgba(244,239,230,0.85), rgba(244,239,230,0.85)), url('<?php echo asset('images/about/lb.jpg'); ?>');">
    
    <div class="bg-white/80 backdrop-blur-md px-8 py-12 rounded-[2.5rem] shadow-2xl border border-white/40 w-full max-w-md transition-all">
      
      <div class="text-center mb-8">
        <h2 class="text-3xl font-serif-lux text-[#0B2530] mb-2 tracking-wide">Welcome</h2>
        <p class="text-xs text-gray-400 font-light">Please sign in to continue your journey.</p>
      </div>

      <?php if (!empty($error_message)): ?>
        <div class="mb-4 text-xs text-red-500 text-center bg-red-50 p-2 rounded-lg border border-red-100">
          <?php echo $error_message; ?>
        </div>
      <?php endif; ?>

      <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            
            <!-- Alert Error Message -->
            @if (session('error_message'))
                <div class="mb-4 text-xs text-red-500 text-center bg-red-50 p-2 rounded-lg border border-red-100">
                {{ session('error_message') }}
                </div>
            @endif

            <!-- Input Email -->
            <div class="relative border-b border-gray-200 py-2 focus-within:border-[#0B2530] transition">
                <label class="block text-[10px] text-gray-400 font-bold uppercase tracking-widest mb-1">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full bg-transparent focus:outline-none text-sm text-[#0B2530] font-light" placeholder="you@example.com" />
            </div>

            <!-- Input Password -->
            <div class="relative border-b border-gray-200 py-2 focus-within:border-[#0B2530] transition">
                <label class="block text-[10px] text-gray-400 font-bold uppercase tracking-widest mb-1">Password</label>
                <div class="flex items-center justify-between">
                <input type="password" name="password" required class="w-full bg-transparent focus:outline-none text-sm text-[#0B2530] font-light" placeholder="••••••••" />
                <button type="button" class="text-gray-400 text-xs hover:text-gray-600 focus:outline-none">👁</button>
                </div>
            </div>

            <!-- Opsi Tambahan -->
            <div class="flex items-center justify-between text-[11px] text-gray-500 pt-1">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" class="rounded text-[#0B2530] focus:ring-0 border-gray-300 w-3.5 h-3.5" />
                <span>Remember me</span>
            </label>
            <a href="#" class="text-[10px] font-bold text-[#0B2530] tracking-wider uppercase hover:underline">Forgot Password?</a>
            </div>

            <!-- Tombol Submit -->
            <div class="pt-4">
            <button type="submit" class="w-full py-3.5 rounded-full bg-[#0B2530] text-white text-xs font-semibold tracking-widest uppercase shadow-lg hover:bg-opacity-95 transition duration-300">
                Login
            </button>
            </div>
        </form>

        <!-- Footer Alternatif Pendaftaran & Sosial -->
        </div>
  </main>

  <!-- Footer Bawah -->
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
          <li><a href="#" class="hover:text-[#0B2530]">Press</a></li>
        </ul>
      </div>
      <div>
        <h5 class="text-[#ffffff] font-semibold uppercase tracking-wider text-[11px] mb-4">Inquiries</h5>
        <ul class="space-y-2 font-light">
          <li><a href="#" class="hover:text-[#0B2530]">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-[#0B2530]">Terms of Service</a></li>
          <li><a href="#" class="hover:text-[#0B2530]">Careers</a></li>
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

</body>
</html>