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
}
