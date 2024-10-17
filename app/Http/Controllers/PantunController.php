<?php

namespace App\Http\Controllers;

use App\Models\Pantun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $pantuns = Pantun::with('editor')->find($id);
        if (!$pantuns) {
            return redirect()->route('pantuns.index')->with('error', 'Pantun tidak ditemukan.');
        }
        return view('pages.pantuns.show', compact('pantuns'));
    }
    public function edit(string $id)
    {
        $pantuns = Pantun::with('editor')->find($id);
        if (!$pantuns) {
            return redirect()->route('pantuns.index')->with('error', 'Pantun tidak ditemukan.');
        }
        return view('pages.pantuns.edit', compact('pantuns'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required',
        ]);

        // Update diary
        $pantuns = Pantun::findOrFail($id);
        $pantuns->update(array_merge($request->all(), ['edited_by' => Auth::id()]));
        return redirect()->route('pantuns.index')->with('success', 'UdiarY updated successfully.');
    }
    public function destroy(string $id)
    {
        // Mencari pantun berdasarkan ID
        $pantuns = Pantun::find($id);
        
        // Cek apakah pengguna yang sedang login adalah pembuat
        if ($pantuns->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat menghapus karya ini.');
        }
        // Hapus quote
        $pantuns->delete();
        return redirect()->route('pantuns.index')->with('success', 'Pantun deleted successfully.');

    }

}
