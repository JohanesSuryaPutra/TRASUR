<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use Illuminate\Http\Request;
use File;

class RuteController extends Controller
{
    function main() {
        $rute = Rute::get();
        return view ('main', compact('rute'));
    }

    function tampil() {
        $rute = Rute::get();
        return view ('rute.rute', compact('rute'));
    }
    
    function insert() {
        return view('rute.rute-entry');
    }

    // insert data ke database
    function upload(Request $request) {
        $this->validate($request, [
            'nama_rute' => 'required',
            'asal' => 'required',
            'tujuan' => 'required'
        ]);

        Rute::create([
            'nama_rute' => $request->nama_rute,
            'asal' => $request->asal,
            'tujuan' => $request->tujuan
        ]);
        return redirect('/rute');
    }
    // Update data di database
    function edit($id_rute) {
        $rute = Rute::find($id_rute);
        return view('rute.rute-edit', compact('rute'));
    }

    // update data ke database
    function update($id_rute, Request $request) {
        $this->validate($request, [
            'nama_rute' => 'required',
            'asal' => 'required',
            'tujuan' => 'required'
        ]);

        $rute = Rute::find($id_rute);
        $rute->nama_rute = $request->nama_rute;
        $rute->asal = $request->asal;
        $rute->tujuan = $request->tujuan;

        $rute->save();
        return redirect('/rute');
    }

    //Hapus
    function Delete($id_rute) {
        $rute = Rute::find($id_rute);
        return view('rute.rute-delete', compact('rute'));
    }

    function yesDelete($id_rute) {
        $rute = Rute::find($id_rute);

        $rute->delete();
        return redirect('/rute');
    }

    function noDelete() {
        return redirect('/rute');
    }
}
