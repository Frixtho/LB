<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResortContent;
use App\Models\RoomPhoto;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    // Tampilkan Halaman Utama Dashboard Admin
    public function dashboard()
    {
        $contact = ResortContent::first() ?? new ResortContent();
        $photos = RoomPhoto::latest()->get();
        return view('auth.dashboard', compact('contact', 'photos'));
    }

    // Mengupdate Data Kontak Resort
    public function updateContact(Request $request)
    {
        $data = $request->validate([
            'location_address' => 'required|string',
            'whatsapp_1' => 'required|string',
            'whatsapp_2' => 'nullable|string',
            'whatsapp_3' => 'nullable|string',
            'email_address' => 'required|email',
            'map_iframe_url' => 'nullable|string',
        ]);

        $contact = ResortContent::first() ?: new ResortContent();
        $contact->fill($data)->save();

        return redirect()->back()->with('success', 'Data kontak Lounusa berhasil diperbarui!');
    }

    // Mengunggah Foto Kamar Baru
    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'room_photo' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
            'title' => 'nullable|string|max:100',
        ]);

        if ($request->hasFile('room_photo')) {
            $file = $request->file('room_photo');
            $filename = 'room_' . time() . '.' . $file->getClientOriginalExtension();
            
            // Simpan langsung ke folder public/images/gallery agar mudah diakses asset()
            $file->move(public_path('images/gallery'), $filename);

            RoomPhoto::create([
                'file_path' => 'images/gallery/' . $filename,
                'title' => $request->title,
            ]);

            return redirect()->back()->with('success', 'Foto kamar baru berhasil ditambahkan!');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah foto.');
    }

    // Menghapus Foto Kamar
    public function deletePhoto($id)
    {
        $photo = RoomPhoto::findOrFail($id);
        
        // Hapus file fisik dari public folder jika ada
        if (File::exists(public_path($photo->file_path))) {
            File::delete(public_path($photo->file_path));
        }

        $photo->delete();
        return redirect()->back()->with('success', 'Foto kamar berhasil dihapus!');
    }
}