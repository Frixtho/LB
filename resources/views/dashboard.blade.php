<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lounusa Admin Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F4EFE6] text-[#0B2530] font-sans antialiased">

  <nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-lg font-semibold tracking-widest uppercase text-[#0B2530]">Lounusa Control Center</h1>
      <a href="{{ route('logout') }}" class="flex items-center gap-2 text-xs font-medium tracking-wider text-red-600 uppercase hover:underline">
        <span>Logout</span> ➔
      </a>
    </div>
  </nav>

  <main class="max-w-7xl mx-auto px-6 py-10 grid md:grid-cols-12 gap-8">
    
    <div class="md:col-span-5 bg-white p-6 rounded-2xl shadow-md border border-gray-100 h-fit">
      <h2 class="text-xl font-bold mb-1 text-[#0B2530]">Update Contact Info</h2>
      <p class="text-xs text-gray-400 mb-6 font-light">Perubahan ini akan langsung mengubah data di halaman Contact Us depan.</p>

      @if(session('success'))
        <div class="mb-4 text-xs text-green-600 bg-green-50 p-3 rounded-xl border border-green-200">{{ session('success') }}</div>
      @endif

      <form action="{{ route('admin.contact.update') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <label class="block text-[10px] uppercase font-bold text-gray-400 tracking-wider mb-1">Alamat Lengkap Resort</label>
          <textarea name="location_address" rows="3" required class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 text-sm focus:outline-none focus:border-[#0B2530] font-light">{{ $contact->location_address }}</textarea>
        </div>

        <div>
          <label class="block text-[10px] uppercase font-bold text-gray-400 tracking-wider mb-1">WhatsApp Phone 1</label>
          <input type="text" name="whatsapp_1" value="{{ $contact->whatsapp_1 }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 text-sm focus:outline-none focus:border-[#0B2530] font-light">
        </div>

        <div>
          <label class="block text-[10px] uppercase font-bold text-gray-400 tracking-wider mb-1">WhatsApp Phone 2 (Opsional)</label>
          <input type="text" name="whatsapp_2" value="{{ $contact->whatsapp_2 }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 text-sm focus:outline-none focus:border-[#0B2530] font-light">
        </div>

        <div>
          <label class="block text-[10px] uppercase font-bold text-gray-400 tracking-wider mb-1">Email Address</label>
          <input type="email" name="email_address" value="{{ $contact->email_address }}" required class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 text-sm focus:outline-none focus:border-[#0B2530] font-light">
        </div>

        <button type="submit" class="w-full bg-[#0B2530] text-white py-3 rounded-xl text-xs font-bold tracking-widest uppercase hover:bg-opacity-90 transition shadow-md">
          Save Contact Updates
        </button>
      </form>
    </div>

    <div class="md:col-span-7 space-y-8">
      
      <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100">
        <h2 class="text-xl font-bold mb-1 text-[#0B2530]">Add New Room Photo</h2>
        <p class="text-xs text-gray-400 mb-6 font-light">Unggah foto panorama kamar resort untuk memperbarui galeri kamar Anda.</p>

        <form action="{{ route('admin.photos.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
          @csrf
          <div>
            <label class="block text-[10px] uppercase font-bold text-gray-400 tracking-wider mb-1">Judul / Tipe Kamar (Opsional)</label>
            <input type="text" name="title" placeholder="Contoh: Ocean Luxury Suite Room" class="w-full bg-gray-50 border border-gray-200 rounded-xl p-3 text-sm focus:outline-none focus:border-[#0B2530] font-light">
          </div>

          <div>
            <label class="block text-[10px] uppercase font-bold text-gray-400 tracking-wider mb-1">Pilih File Foto</label>
            <input type="file" name="room_photo" required class="w-full text-xs text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-gray-100 file:text-[#0B2530] hover:file:bg-gray-200 cursor-pointer">
          </div>

          <button type="submit" class="w-full bg-[#2C7A7B] text-white py-3 rounded-xl text-xs font-bold tracking-widest uppercase hover:bg-opacity-90 transition shadow-md">
            Upload Image
          </button>
        </form>
      </div>

      <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100">
        <h3 class="text-sm font-bold uppercase tracking-wider text-gray-400 mb-4">Current Room Gallery ({{ $photos->count() }})</h3>
        
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
          @foreach($photos as $photo)
            <div class="group relative rounded-xl overflow-hidden border border-gray-100 bg-gray-50 shadow-sm">
              <img src="{{ asset($photo->file_path) }}" class="w-full h-28 object-cover">
              <div class="p-2 text-[11px] font-medium truncate text-gray-600">{{ $photo->title ?? 'Untitled' }}</div>
              
              <form action="{{ route('admin.photos.delete', $photo->id) }}" method="POST" class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Hapus foto ini dari galeri?')" class="bg-red-600 text-white p-1.5 rounded-full hover:bg-red-700 transition shadow">
                  🗑
                </button>
              </form>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </main>

</body>
</html>