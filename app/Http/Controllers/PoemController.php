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
            
        ]);

        // Membuat diary baru
        Poem::create($request->all());
        return redirect()->route('pages.poems.index')->with('success', 'UdiarY created successfully.');
    }
    public function show(string $id)
    {
        $poems = Poem::find($id);
        return view('pages.poems.show', compact('poems'));
    }
}
