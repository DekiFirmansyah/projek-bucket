<?php

namespace App\Http\Controllers;

use App\Models\Transaksi; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pembeli;
use App\Models\Barang;
use App\Models\Toko;
use Illuminate\Support\Facades\Storage;
use PDF;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = Transaksi::orderBy('id', 'asc')->paginate(5);
        return view('admin.transaksi.index', ['paginate'=>$paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        $toko = Toko::all();
        return view('user.transaksi.checkout',['pembeli' => $pembeli, 'barang' => $barang, 'toko' => $toko]); 
    
    }

    public function pesanan()
    {
        return view('user.transaksi.index');
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
            'pembeli' => 'required',
            'toko' => 'required',
            'barang' => 'required',
            'catatan' => 'required',
        ]);
        

        $transaksi = new Transaksi;
        $transaksi->catatan = $request->get('catatan');
        $transaksi->save();

        $pembeli = new Pembeli;
        $pembeli->id = $request->get('pembeli');
        $transaksi->pembeli()->associate($pembeli);
        $transaksi->save();  
        
        $toko = new Toko;
        $toko->id = $request->get('toko');
        $transaksi->toko()->associate($toko);
        $transaksi->save();

        $barang = new Barang;
        $barang->id = $request->get('barang');
        $transaksi->barang()->associate($barang);
        $transaksi->save(); 

        return redirect()->route('transaksi.show', $pembeli -> id) 
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
        $transaksi = Transaksi::all();
        return view('user.transaksi.history', ['transaksi' => $transaksi]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('admin.transaksi.edit', compact('transaksi')); 
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
            'pembayaran' => 'required',
            'status' => 'required',
        ]);

        $transaksi = Transaksi::where('id', $id)->first();  
        $transaksi->pembayaran = $request->get('pembayaran');
        $transaksi->status = $request->get('status');
        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi Berhasil Diupdate');

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

    public function laporan_pdf(){
        $paginate = Transaksi::all(); 
        $pdf = PDF::loadview('admin.transaksi.laporan_pdf',['paginate'=>$paginate]);
        return $pdf->stream();
        
    }

}
