<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class AccommodationController extends Controller
{
    public function index()
    {
        $accommodations = Accommodation::all();
        return view('accommodations.index', compact('accommodations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hotel' => 'required|string|max:255',
            'harga' => 'required|integer',
            'jumlah_kamar' => 'required|integer',
        ]);

        Accommodation::create([
            'nama_hotel' => $request->nama_hotel,
            'harga' => $request->harga,
            'jumlah_kamar' => $request->jumlah_kamar,
        ]);

        return redirect()->back()->with('success', 'Akomodasi berhasil ditambahkan!');
    }

    public function cetak(){
        $data=Accommodation::all();
        $pdf=Pdf::loadview('accommodations.cetak',compact('data'));
        return $pdf->download('laporan.pdf');
    }
}
