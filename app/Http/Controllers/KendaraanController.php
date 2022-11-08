<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Rute;
use PDF;

class KendaraanController extends Controller
{
    function tampil() {
        $kendaraan = Kendaraan::get();
        return view ('kendaraan.kendaraan', compact('kendaraan'));
    }

    function insert() {
        $kendaraan = Kendaraan::all(); 
        $rute = Rute::all();
        return view('kendaraan.kendaraan-entry', [
            "Kendaraan" => $kendaraan,
            "Rute" => $rute,
        ]);   
    }

    // insert data ke database
    function upload(Request $request) {
        $this->validate($request, [
            'tipe_kendaraan' => 'required',
            'daya_angkut' => 'required',
            'harga' => 'required',
            'nama_rute' => 'required'
        ]);

        Kendaraan::create([
            'tipe_kendaraan' => $request->tipe_kendaraan,
            'daya_angkut' => $request->daya_angkut,
            'harga' => $request->harga,
            'id_rute' => $request->nama_rute
        ]);
        return redirect('/kendaraan');
    }

    // Update data di database
    function edit($id_kendaraan) {
        $rute = Rute::all();
        $kendaraan = Kendaraan::find($id_kendaraan);
        return view('kendaraan.kendaraan-edit', [
            'Kendaraan' => $kendaraan,
            "Rute" => $rute
        ]);
    }

    // update data ke database
    function update($id_kendaraan, Request $request) {
        $this->validate($request, [
            'tipe_kendaraan' => 'required',
            'daya_angkut' => 'required',
            'harga' => 'required',
            'nama_rute' => 'required'
        ]);

        $kendaraan = Kendaraan::find($id_kendaraan);
        $kendaraan->tipe_kendaraan = $request->tipe_kendaraan;
        $kendaraan->daya_angkut = $request->daya_angkut;
        $kendaraan->harga = $request->harga;
        $kendaraan->id_rute = $request->nama_rute;

        $kendaraan->save();
        return redirect('/kendaraan');
    }

    //Hapus
    function Delete($id_kendaraan) {
        $kendaraan = Kendaraan::find($id_kendaraan);
        return view('kendaraan.kendaraan-delete', compact('kendaraan'));
    }

    function yesDelete($id_kendaraan) {
        $kendaraan = Kendaraan::find($id_kendaraan);

        $kendaraan->delete();
        return redirect('/kendaraan');
    }

    function noDelete() {
        return redirect('/kendaraan');
    }

    public function cetak_pdf()
    {
    	$kendaraan = Kendaraan::all();
    	$pdf = PDF::loadview('kendaraan/kendaraan_cetak',['kendaraan'=>$kendaraan]);
    	return $pdf->download('laporan-kendaraan-pdf.pdf');
    }
}
