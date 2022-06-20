<?php

namespace App\Http\Controllers;

use App\Models\Detail_Transaksi;
use App\Models\Toko;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

class Detail_TransaksiController extends Controller
{
    public function cetak_pdf(){
        $details = Detail_Transaksi::all();
        $pdf = PDF::loadview('details.details_pdf',['details'=>$details]);
        return $pdf->stream();
        
    }
}
