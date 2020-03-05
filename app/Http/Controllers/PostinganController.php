<?php

namespace App\Http\Controllers;

use App\Postingan;
use App\Tag;
use Illuminate\Http\Request;

class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postingan = Postingan::with('tag')->get();
        return view ('postingan.index', compact('postingan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::all();
        return view('postingan.create', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postingan = new Postingan;
        $postingan->deskripsi = $request->deskripsi;
        $postingan->kategori = $request->kategori;
        $postingan->id_tag = $request->id_tag;
        $postingan->save();
        //
        return redirect()->route('postingan.index')
            ->with(['massage' => 'Data Postingan Berhasil Di Simpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postingan = Postingan::all();
        return view ('postingan.show', compact('postingan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::all();
        $postingan = Postingan::findOrFail($id);
        return view('postingan.edit', compact('postingan','tag'))
        ->with(['massage' => 'Data Postingan Berhasil Di Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $postingan = new Postingan;
        $postingan->deskripsi = $request->deskripsi;
        $postingan->kategori = $request->kategori;
        $postingan->id_tag = $request->id_tag;
        $postingan->save();
        // ;
        return redirect()->route('postingan.index')
            ->with(['massage' => 'Data Postingan Berhasil Di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postingan $postingan)
    {
        $postingan = Postingan::findOrFail($id);
        $postingan->delete();
        return redirect()->route('postingan.index')
            ->with(['success' => 'Data Postingan Berhasil Dihapus']);
    }
}
