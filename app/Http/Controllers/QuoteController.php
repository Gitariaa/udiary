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
            'theme' => 'required',
        ]);

        // Membuat diary baru
        Quote::create($request->all());
        return redirect()->route('quotes.index')->with('success', 'UdiarY created successfully.');
    }
    public function show(string $id)
    {
        $quotes = Quote::find($id);
        return view('pages.quotes.show', compact('quotes'));
    }
}
