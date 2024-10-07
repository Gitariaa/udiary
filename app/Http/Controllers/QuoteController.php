<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::all();
        return view('pages.quotes.index', compact('quotes'));
    }
    public function create()
    {
        return view('pages.quotes.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            
        ]);

        // Membuat diary baru
        Quote::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user_id, // Mengambil ID pengguna yang terautentikasi
        ]);

        return redirect()->route('pages.quotes.index')->with('success', 'UdiarY created successfully.');
    }
}
