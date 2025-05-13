<?php

namespace App\Http\Controllers;
use App\Models\Berita;

use Illuminate\Http\Request;

class Frontcontroller extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('detail.welcome', compact('berita'));
    }
    public function show($id)
    {
        $berita = berita::findOrFail($id);
        return view('detail.show', compact('berita'));
    }
}
