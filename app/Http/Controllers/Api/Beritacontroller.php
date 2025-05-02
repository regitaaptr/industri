<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class Beritacontroller extends Controller
{
    public function getberita(){
        $data_berita = Berita::all();
        return response()->json([
            'data' => $data_berita

        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $berita->id_kategori = $request->id_kategori;
        $berita->id_penerbit = $request->id_penerbit;

        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000, 9999) . $img->getCLientOriginalName();
            $img->move('images/berita', $name);
            $berita->cover = $name;
        }

        $berita->save();

        return response()->json([
            'success' => true,
            'message' => 'berita telah berhasil ditambahkan',
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
        $berita->id_kategori = $request->id_kategori;
        $berita->id_penerbit = $request->id_penerbit;


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
        //
    }
}
