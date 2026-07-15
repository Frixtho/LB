<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResortContent; 
use App\Models\RoomPhoto;

class PageController extends Controller
{
    // Fungsi untuk merender halaman Contact Us
    public function showContact()
    {
        $contact = ResortContent::first() ?? new ResortContent(); 
        return view('contact', compact('contact')); 
    }

    // Fungsi untuk merender halaman Home / Kamar
    public function showHome()
    {
        $contact = ResortContent::first() ?? new ResortContent();
        $roomPhotos = RoomPhoto::latest()->get(); 

        return view('home', compact('contact', 'roomPhotos'));
    }
}