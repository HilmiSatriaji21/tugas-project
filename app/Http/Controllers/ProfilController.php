<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profil::all();
        return view ('profil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profil = Profil::all();
        return view ('profil.create', compact('profil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profil = new Profil;
        $profil->nama = $request->nama;
        $profil->tgl_lahir = $request->tgl_lahir;
        $profil->alamat = $request->alamat;
        $profil->no_tlp = $request->no_tlp;
        $profil->save();
        // dd($siswa);
        return redirect()->route('profil.index')
            ->with(['massage' => 'Data Profil Berhasil Di Simpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profil = Profil::findOrFail($id);
        return view('profil.show', compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        return view('profil.edit', compact('profil'))
        ->with(['massage' => 'Data Profil Berhasil Di Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        $profil->nama = $request->nama;
        $profil->tgl_lahir = $request->tgl_lahir;
        $profil->alamat = $request->alamat;
        $profil->no_tlp = $request->no_tlp;
        $profil->save();
        return redirect()->route('profil.index')
        ->with(['massage' => 'Data Profil Siswa Berhasil Di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profil = Profil::findOrFail($id);
        $profil->delete();
        return redirect()->route('profil.index')
            ->with(['success' => 'Data Profil Siswa Berhasil Dihapus']);
    }
}
