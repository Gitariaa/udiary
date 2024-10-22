<?php

namespace App\Http\Controllers;

use App\Models\Poetry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoetryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $poetries = Poetry::all();
        return view('pages.poetries.index', compact('poetries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.poetries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            
        ]);

        // Membuat diary baru
        Poetry::create($request->all());
        return redirect()->route('poetries.index')->with('success', 'UdiarY created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $poetries = Poetry::find($id);
        return view('pages.poetries.show', compact('poetries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $poetry = Poetry::findOrFail($id);
        // Cek apakah user yang login adalah pemilik pantun
        if ($poetry->user_id !== Auth::id()) {
            return redirect()->route('poetries.index')->with('error', 'Hanya pembuat yang dapat mengedit UdiarY ini.');
        }
        return view('pages.poetries.edit', compact('poetry'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required',
        ]);

        // Update diary
        $poetries = Poetry::findOrFail($id);
        // Cek apakah user yang login adalah pemilik pantun
        if ($poetries->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat memperbarui UdiarY ini.');
        }

        // Update pantun jika pengguna yang login adalah pemiliknya
        $poetries->title = $request->input('title');
        $poetries->content = $request->input('content');
        $poetries->theme = $request->input('theme');
        $poetries->save();
        return redirect()->route('poetries.index')->with('success', 'UdiarY updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari pantun berdasarkan ID
        $poetries = Poetry::find($id);
        
        // Cek apakah pengguna yang sedang login adalah pembuat
        if ($poetries->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat menghapus UpoetrY ini.');
        }
        // Hapus quote
        $poetries->delete();
        return redirect()->route('poetries.index')->with('success', 'Poetry deleted successfully.');

    }
}
