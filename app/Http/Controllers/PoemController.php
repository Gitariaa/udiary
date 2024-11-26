<?php

namespace App\Http\Controllers;

use App\Models\Poem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoemController extends Controller
{
    public function index()
    {
        $poems = Poem::orderBy('created_at', 'desc')->get();
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
        // Cek apakah user yang login adalah pemilik pantun
        if ($poems->user_id !== Auth::id()  && Auth::user()->role !== 'admin') {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat mengedit UdiarY ini.');
        }
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
        $poems = Poem::findOrFail($id);
        $poems->update(array_merge($request->all(), ['edited_by' => Auth::id()]));
        // Cek apakah user yang login adalah pemilik pantun
        if ($poems->user_id !== Auth::id() && Auth::user()->role !== 'admin') {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat memperbarui UdiarY ini.');
        }
        // Update pantun jika pengguna yang login adalah pemiliknya
        $poems->title = $request->input('title');
        $poems->content = $request->input('content');
        $poems->theme = $request->input('theme');
        $poems->save();
        return redirect()->route('poems.index')->with('success', 'UdiarY updated successfully.');
    }
    public function destroy(string $id)
    {
        // Mencari pantun berdasarkan ID
        $poems = Poem::find($id);
        
        // Cek apakah pengguna yang sedang login adalah pembuat
        if ($poems->user_id !== Auth::id() && Auth::user()->role !== 'admin') {
            return redirect()->back()->with('error', 'Hanya pembuat yang dapat menghapus UpoeM ini.');
        }
        // Hapus poem
        $poems->delete();
        return redirect()->route('poems.index')->with('success', 'Poem deleted successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Cari berdasarkan judul atau tema puisi
        $poems = Poem::where('title', 'like', "%$query%")
            ->orWhere('theme', 'like', "%$query%")
            ->orderBy('created_at', 'desc') // Urutkan berdasarkan waktu terbaru
            ->get();

        // Kirim hasil pencarian ke view
        return view('pages.poems.index', compact('poems'));
    }
}
