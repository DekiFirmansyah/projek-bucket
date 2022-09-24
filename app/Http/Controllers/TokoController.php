<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Toko;


class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    const TOKO_INDEX = 'toko.index';
    
    public function index()
    {
        $toko = Toko::all(); // Mengambil semua isi tabel
        $paginate = Toko::orderBy('id', 'asc')->paginate(3);
        return view(TOKO_INDEX, ['toko' => $toko,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toko.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $toko = new Toko;
        $toko->nama = $request->get('nama_toko');
        $toko->email = $request->get('email');
        $toko->alamat = $request->get('alamat');
        $toko->no_telp = $request->get('no_telp');
        $toko->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route(TOKO_INDEX)->with('success', 'Toko Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $toko = Toko::where('id', $id)->first();
        return view('toko.detail', compact('toko'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $toko = Toko::where('id', $id)->first();
        return view('toko.edit', compact('toko'));
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
        $request->validate([
            'nama_toko' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $toko = Toko::where('id', $id)->first();
        $toko->nama = $request->get('nama_toko');
        $toko->email = $request->get('email');
        $toko->alamat = $request->get('alamat');
        $toko->no_telp = $request->get('no_telp');
        $toko->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route(TOKO_INDEX)->with('success', 'Toko Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    
    * public function destroy($id)
    *{
    *}
     */
}
