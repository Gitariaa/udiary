<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuoteController extends Controller
{
    // Menampilkan semua quote
    public function index()
    {
        $quotes = Quote::all();
        return view('pages.quotes.index', compact('quotes'));
    }

    // Menampilkan form pembuatan quote
    public function create()
    {
        return view('pages.quotes.create');
    }

    // Menyimpan quote baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required',
        ]);

        Quote::create($request->all());
        return redirect()->route('quotes.index')->with('success', 'UdiarY created successfully.');
    }

    // Menampilkan quote berdasarkan ID
    public function show(string $id)
    {
        $quotes = Quote::findOrFail($id);
        return view('pages.quotes.show', compact('quotes'));
    }

    // Menampilkan form edit quote
    public function edit(string $id)
    {
        $quotes = Quote::findOrFail($id);
        return view('pages.quotes.edit', compact('quotes'));
    }

    // Memperbarui quote yang sudah ada
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required',
        ]);

        $quotes = Quote::findOrFail($id);
        // Memperbarui quote
        $quotes->update(array_merge($request->all(), ['edited_by' => Auth::id()]));
        return redirect()->route('quotes.index')->with('success', 'UdiarY updated successfully.');
    }

    // Menghapus quote yang ada
    public function destroy(string $id)
    {
        // Mencari quote berdasarkan ID
        $quotes = Quote::findOrFail($id);

        // Memastikan hanya pembuat yang dapat menghapus
        if ($quotes->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat menghapus karya ini.');
        }

        // Menghapus quote
        $quotes->delete();
        return redirect()->route('quotes.index')->with('success', 'Quote deleted successfully.');
    }
}
