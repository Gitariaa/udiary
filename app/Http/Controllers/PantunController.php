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
}
