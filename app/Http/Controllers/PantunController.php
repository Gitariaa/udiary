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
        // Temukan pantun berdasarkan ID
        $pantuns = Pantun::findOrFail($id);

        // Cek apakah user yang login adalah pemilik pantun
        if ($pantuns->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat mengedit UdiarY ini.');
        }

        // Tampilkan halaman edit
        return view('pages.pantuns.edit', compact('pantuns'));
    }
    public function update(Request $request, string $id)
    {
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'theme' => 'required',
        ]);

        // Temukan pantun berdasarkan ID
        $pantuns = Pantun::findOrFail($id);

        // Cek apakah user yang login adalah pemilik pantun
        if ($pantuns->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat memperbarui UdiarY ini.');
        }

        // Update pantun jika pengguna yang login adalah pemiliknya
        $pantuns->title = $request->input('title');
        $pantuns->content = $request->input('content');
        $pantuns->theme = $request->input('theme');
        $pantuns->save();

        // Redirect dengan pesan sukses
        return redirect()->route('pantuns.index')->with('success', 'UdiarY berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        // Mencari pantun berdasarkan ID
        $pantuns = Pantun::find($id);

        // Cek apakah pengguna yang sedang login adalah pembuat
        if ($pantuns->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat menghapus UpantuN ini.');
        }
        // Hapus pantun
        $pantuns->delete();
        return redirect()->route('pantuns.index')->with('success', 'Pantun deleted successfully.');
    }
}
