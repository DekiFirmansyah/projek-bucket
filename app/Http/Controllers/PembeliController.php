<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all(); // Mengambil semua isi tabel
        $paginate = Pembeli::orderBy('id', 'asc')->paginate(3);
        return view('pembeli.index', ['pembeli' => $pembeli,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
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
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'foto' => 'required',
        ]);
        
        if($request->file('foto')){
            $image_name = $request->file('foto')->store('image', 'public');
        }

        $pembeli = new Pembeli;
        $pembeli->nama = $request->get('Nama');
        $pembeli->jenis_kelamin = $request->get('jenis_kelamin');
        $pembeli->email = $request->get('email');
        $pembeli->alamat = $request->get('alamat');
        $pembeli->no_telp = $request->get('no_telp');
        $pembeli->foto = $image_name;
        $pembeli->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pembeli.index')->with('success', 'Pembeli Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::where('id', $id)->first();
        return view('pembeli.detail', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::find('id', $id);
        return view('pembeli.edit', compact('pembeli'));
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
            'jenis_kelamin' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'foto' => 'required',
        ]);

        $pembeli = Pembeli::find('id', $id);
        $pembeli->nama = $request->get('Nama');
        $pembeli->jenis_kelamin = $request->get('jenis_kelamin');
        $pembeli->email = $request->get('email');
        $pembeli->alamat = $request->get('alamat');
        $pembeli->no_telp = $request->get('no_telp');
        if($pembeli->foto && file_exists(storage_path('./app/public/'. $pembeli->foto))){
            Storage::delete(['./public/', $pembeli->foto]);
        }

        $image_name = $request->file('foto')->store('image', 'public');
        $pembeli->foto = $image_name;
        $pembeli->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pembeli.index')->with('success', 'Pembeli Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembeli::where('id', $id)->delete();
        return redirect()->route('pembeli.index')->with('success', 'Pembeli Berhasil Dihapus');
    }
}
