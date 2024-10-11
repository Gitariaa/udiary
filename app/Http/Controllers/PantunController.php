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
            'content' => 'required|string',
            'theme' => 'required|string',
        ]);

        // Membuat diary baru
        Pantun::create($request->all());
        return redirect()->route('pantuns.index')->with('success', 'UdiarY created successfully.');
    }
    public function show(string $id)
    {
        $pantuns = Pantun::find($id);
        return view('pages.pantuns.show', compact('pantuns'));
    }
    public function edit(string $id)
    {
        $pantun = Pantun::findOrFail($id);
        return view('pages.pantuns.edit', compact('pantun'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required',
        ]);

        // Update diary
        $pantuns = Pantun::find($id)->update($request->all());
        return redirect()->route('pantuns.index')->with('success', 'UdiarY updated successfully.');
    }
    public function destroy(string $id)
    {
        // Mencari pantun berdasarkan ID
        $pantun = Pantun::find($id);
        
        // Memastikan pantun ditemukan sebelum menghapus
        if ($pantun) {
            $pantun->delete();
            return redirect()->route('pantuns.index')->with('success', 'Pantun deleted successfully.');
        } else {
            // Jika pantun tidak ditemukan, redirect dengan pesan error
            return redirect()->route('pantuns.index')->with('error', 'Pantun not found.');
        }
    }

}
