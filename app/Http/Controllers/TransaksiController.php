<?php

namespace App\Http\Controllers;

use App\Models\Transaksi; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pembeli;
use App\Models\Barang;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::with('pembeli')->get();
        $transaksi = Transaksi::with('barang')->get();
        $paginate = Transaksi::orderBy('id', 'asc')->paginate(3);
        return view('transaksi.index', ['transaksi' => $transaksi,'paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = Pembeli::all();//mendapatkan data dari tabel pembeli
        $barang = Barang::all();
        return view('transaksi.create',['pembeli' => $pembeli, 'barang' => $barang]); 
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //nambah transaksi baru
        $request->validate([
            'id' => 'required',
            'pembeli_id' => 'required',
            'barang_id' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
        ]);
        

        $transaksi = new Transaksi;
        $transaksi->id = $request->get('id ');
        $transaksi->jumlah = $request->get('jumlah');
        $transaksi->total_harga = $request->get('total_harga');
        $transaksi->save();

        $pembeli = new Pembeli;
        $pembeli->id = $request->get('Pembeli');

        $transaksi->pembeli()->associate($pembeli);
        $transaksi->save();  
        
        $barang = new Barang;
        $barang->id = $request->get('Barang');

        $transaksi->barang()->associate($barang);
        $transaksi->save(); 

        return redirect()->route('transaksi.index') 
            ->with('success', 'Transaksi Berhasil Dilakukan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::with('pembeli')->where('id', $id)->first();
        $transaksi = Transaksi::with('barang')->where('id', $id)->first();
        return view('mahasiswa.detail', ['Mahasiswa' => $mahasiswa]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::with('pembeli')->where('id', $id)->first(); 
        $pembeli = Pembeli::all(); //mendapatkan data dari tabel pembeli
         
        $transaksi = Transaksi::with('barang')->where('id', $id)->first(); 
        $barang = Barang::all(); //mendapatkan data dari tabel barang
        return view('transaksi.edit', compact('Transaksi')); 
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
        //melakukan validasi data 
        $request->validate([ 
            'id' => 'required',
            'pembeli_id' => 'required',
            'barang_id' => 'required',
            'jumlah' => 'required',
            'total_harga' => 'required',
        ]);

        $transaksi = Transaksi::with('pembeli')->where('id', $id)->first(); 
        $transaksi = Transaksi::with('barang')->where('id', $id)->first(); 
        $transaksi->id = $request->get('id');
        $transaksi->jumlah = $request->get('jumlah');;
        $transaksi->total_harga = $request->get('total_harga');
        $transaksi->save();

        $pembeli = new Pembeli;
        $pembeli->id = $request->get('Pembeli');

        $transaksi->pembeli()->associate($pembeli);
        $transaksi->save();  
        
        $barang = new Barang;
        $barang->id = $request->get('Barang');

        $transaksi->barang()->associate($barang);
        $transaksi->save();

        return redirect()->route('transaksi.index')
            ->with('success', 'Transaksi Berhasil Diupdate');
        
        
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaksi::where('id', $id)->delete(); 
 
        return redirect()->route('transaksi.index')             
        -> with('success', 'Transaksi Berhasil Dihapus'); 
    }

    public function total(){
        $transaksi = Transaksi::with('pembeli')->where('id', $id)->first(); 
        $pembeli = Pembeli::all(); //mendapatkan data dari tabel pembeli
         
        $transaksi = Transaksi::with('barang')->where('id', $id)->first(); 
        $barang = Barang::all(); //mendapatkan data dari tabel barang

        $total = array();
        foreach($transaksi as $tr){
            $subtotal = $tr->harga*$tr->jumlah;
            array_push($total, $subtotal);
        }
        dump($total);
        return view('transaksi.total', compact('Transaksi'));
        //barang --> harga barang , harga tambahan
        //transaksi --> jumlah barang, jumlah tambahan
        //total = (harga barang * jumlah barang) + (harga tambahan * jumlah tambah)
        //return total;
        
    }
}
