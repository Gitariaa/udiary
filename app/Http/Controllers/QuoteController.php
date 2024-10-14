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
    public function edit(string $id)
    {
        $quotes = Quote::findOrFail($id);
        return view('pages.quotes.edit', compact('quotes'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required',
        ]);

        // Update diary
        $quotes = Quote::find($id)->update($request->all());
        return redirect()->route('quotes.index')->with('success', 'UdiarY updated successfully.');
    }
    public function destroy(string $id)
    {
        // Mencari pantun berdasarkan ID
        $quotes = Quote::find($id);
        
        // Memastikan pantun ditemukan sebelum menghapus
        if ($quotes) {
            $quotes->delete();
            return redirect()->route('quotes.index')->with('success', 'Quote deleted successfully.');
        } else {
            // Jika pantun tidak ditemukan, redirect dengan pesan error
            return redirect()->route('quotes.index')->with('error', 'Quote not found.');
        }
    }
}
