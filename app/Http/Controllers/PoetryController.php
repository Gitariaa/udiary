<?php

namespace App\Http\Controllers;

use App\Models\Poetry;
use Illuminate\Http\Request;

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
        return view('pages.poetries.edit', compact('poetries'));
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
        $poetries = Poetry::find($id)->update($request->all());

        return redirect()->route('pages.poetries.index')->with('success', 'UdiarY updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poetries = Poetry::find($id)->delete();
        return redirect()->route('pages.poetries.index')->with('success', 'UdiarY deleted successfully.');
    }
}
