<?php

namespace App\Http\Controllers;

use App\Models\Pemesan;
use Illuminate\Http\Request;

class PemesanController extends Controller
{
    function tampil() {
        $pemesan = Pemesan::get();
        return view ('pemesan.pemesan', compact('pemesan'));
    }

    function insert() {
        return view('pemesan.pemesan-entry');
    }

    // insert data ke database
    function upload(Request $request) {
        $this->validate($request, [
            'nama_pem' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'tgl_lahir' => 'required',
            'bayar' => 'required'
        ]);

        Pemesan::create([
            'nama_pem' => $request->nama_pem,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'tgl_lahir' => $request->tgl_lahir,
            'bayar' => $request->bayar
        ]);
        return redirect('/pemesan');
    }

    // Update data di database
    function edit($id_pemesan) {
        $pemesan = Pemesan::find($id_pemesan);
        return view('pemesan.pemesan-edit', compact('pemesan'));
    }

    // update data ke database
    function update($id_pemesan, Request $request) {
        $this->validate($request, [
            'nama_pem' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'tgl_lahir' => 'required',
            'bayar' => 'required'
        ]);

        $pemesan = Pemesan::find($id_pemesan);
        $pemesan->nama_pem = $request->nama_pem;
        $pemesan->email = $request->email;
        $pemesan->no_telp = $request->no_telp;
        $pemesan->tgl_lahir = $request->tgl_lahir;
        $pemesan->bayar = $request->bayar;

        $pemesan->save();
        return redirect('/pemesan');
    }

    //Hapus
    function Delete($id_pemesan) {
        $pemesan = Pemesan::find($id_pemesan);
        return view('pemesan.pemesan-delete', compact('pemesan'));
    }

    function yesDelete($id_pemesan) {
        $pemesan = Pemesan::find($id_pemesan);

        $pemesan->delete();
        return redirect('/pemesan');
    }

    function noDelete() {
        return redirect('/pemesan');
    }
}
