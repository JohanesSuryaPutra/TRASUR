<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use Illuminate\Http\Request;
use File;

class AgenController extends Controller
{
    function tampil() {
        $agen = Agen::get();
        return view ('agen.agen', compact('agen'));
    }
    
    function insert() {
        return view('agen.agen-entry');
    }

    // insert data di database
    function upload(Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        Agen::create([
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);
        return redirect('/agen');
    }

    // Update data di database
    function edit($id_agen) {
        $agen = Agen::find($id_agen);
        return view('agen.agen-edit', compact('agen'));
    }

    // update data ke database
    function update($id_agen, Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        $agen = Agen::find($id_agen);
        $agen->nama = $request->nama;
        $agen->no_telp = $request->no_telp;
        $agen->alamat = $request->alamat;

        $agen->save();
        return redirect('/agen');
    }

    //Hapus
    function Delete($id_agen) {
        $agen = Agen::find($id_agen);
        return view('agen.agen-delete', compact('agen'));
    }

    function yesDelete($id_agen) {
        $agen = Agen::find($id_agen);

        $agen->delete();
        return redirect('/agen');
    }

    function noDelete() {
        return redirect('/agen');
    }
}