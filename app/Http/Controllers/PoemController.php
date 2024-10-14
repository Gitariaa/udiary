<?php

namespace App\Http\Controllers;

use App\Models\Poem;
use Illuminate\Http\Request;

class PoemController extends Controller
{
    public function index()
    {
        $poems = Poem::all();
        return view('pages.poems.index', compact('poems'));
    }
    public function create()
    {
        return view('pages.poems.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required|string',
        ]);

        // Membuat diary baru
        Poem::create($request->all());
        return redirect()->route('poems.index')->with('success', 'UdiarY created successfully.');
    }
    public function show(string $id)
    {
        $poems = Poem::find($id);
        return view('pages.poems.show', compact('poems'));
    }
    public function edit(string $id)
    {
        $poems = Poem::findOrFail($id);
        return view('pages.poems.edit', compact('poems'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required',
        ]);

        // Update diary
        $poems = Poem::find($id)->update($request->all());
        return redirect()->route('poems.index')->with('success', 'UdiarY updated successfully.');
    }
    public function destroy(string $id)
    {
        // Mencari pantun berdasarkan ID
        $poems = Poem::find($id);
        
        // Memastikan pantun ditemukan sebelum menghapus
        if ($poems) {
            $poems->delete();
            return redirect()->route('poems.index')->with('success', 'Poem deleted successfully.');
        } else {
            // Jika pantun tidak ditemukan, redirect dengan pesan error
            return redirect()->route('poems.index')->with('error', 'Poem not found.');
        }
    }
}
