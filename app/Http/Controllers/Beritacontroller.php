<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Berita;


class Beritacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berita  = Berita::all();
        return view('berita.create', compact('berita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita              = new Berita;
        $berita->judul    = $request->judul;
        $berita->isi  = $request->isi;
        $berita->tanggal_terbit  = $request->tanggal_terbit;
        $berita->penulis  = $request->penulis;

        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000, 9999) . $img->getCLientOriginalName();
            $img->move('images/berita', $name);
            $berita->cover = $name;
        }

        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Data Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita    = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita              = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->isi       = $request->isi;
        $berita->tanggal_terbit        = $request->tanggal_terbit;
        $berita->penulis  = $request->penulis;

        if ($request->hasFile('cover')) {
            $berita->deleteImage();
            $img  = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalname();
            $img->move('images/berita/', $name);
            $berita->cover = $name;
        }


    $berita->save();
    return redirect()->route('berita.index')->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Data Berhasil Dihapus');
    }
}
