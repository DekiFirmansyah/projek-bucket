<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //const BARANG_INDEX = "barang.index";

    public function index()
    {
        $barang = Barang::all(); // Mengambil semua isi tabel
        $paginate = Barang::orderBy('id', 'asc')->paginate(5);
        return view('admin.barang.index', ['barang' => $barang,'paginate'=>$paginate]);
    }

    public function daftar_barang()
    {
        $barang = Barang::all(); // Mengambil semua isi tabel
        $paginate = Barang::orderBy('id', 'asc');
        return view('user.barang.daftarBarang', ['barang' => $barang,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barang.create');
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
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'estimasi_pembuatan' => 'required',
            'foto' => 'required',
            'catatan' => 'required',
        ]);
        
        if($request->file('foto')){
            $image_name = $request->file('foto')->store('image', 'public');
        }

        $barang = new Barang;
        $barang->nama = $request->get('nama');
        $barang->harga = $request->get('harga');
        $barang->kategori = $request->get('kategori');
        $barang->estimasi_pembuatan = $request->get('estimasi_pembuatan');
        $barang->foto = $image_name;
        $barang->catatan = $request->get('catatan');
        $barang->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::where('id', $id)->first();
        return view('admin.barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('admin.barang.edit', compact('barang'));
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
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'estimasi_pembuatan' => 'required',
            'foto' => 'required',
            'catatan' => 'required',
        ]);

        $barang = Barang::find($id);
        $barang->nama = $request->get('nama');
        $barang->harga = $request->get('harga');
        $barang->kategori = $request->get('kategori');
        $barang->estimasi_pembuatan = $request->get('estimasi_pembuatan');
        if($barang->foto && file_exists(storage_path('./app/public/'. $barang->foto))){
            Storage::delete(['public/', $barang->foto]);
        }

        $image_name = $request->file('foto')->store('image', 'public');
        $barang->foto = $image_name;
        $barang->catatan = $request->get('catatan');
        $barang->save();
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id', $id)->delete();
        return redirect()->route('barang.index')->with('success', 'Barang Berhasil Dihapus');
    }
}
