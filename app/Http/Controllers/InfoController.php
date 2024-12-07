<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        // Mengirim data atau informasi yang diperlukan untuk halaman informasi
        return view('pages.information.index');
    }
}
