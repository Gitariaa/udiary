<?php

namespace App\Http\Controllers;

use App\Models\Pantun;
use Illuminate\Http\Request;

class PantunController extends Controller
{
    public function index()
    {
        $pantuns = Pantun::all();
        return view('pages.pantuns.index', compact('pantuns'));
    }
    public function create()
    {
        return view('pages.pantuns.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            
        ]);

        // Membuat diary baru
        Pantun::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user_id, // Mengambil ID pengguna yang terautentikasi
        ]);

        return redirect()->route('pages.pantuns.index')->with('success', 'UdiarY created successfully.');
    }
}
