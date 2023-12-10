<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use Illuminate\Http\Request;

class DataAnggotaController extends Controller
{
    public function index()
    {
        $data = DataAnggota::all();
        return view('dataanggota', compact('data'));
    }

    public function add()
    {
        return view('tambahdataanggota');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function simpan(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
        ]);

        DataAnggota::create($validateData);
        return redirect('data-anggota');
    

    }

    public function edit($id)
    {
        $data = DataAnggota::findorfail($id);
        return view('editdataanggota', compact('data'));
        // return view('admin.edit', ['No' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = DataAnggota::find($id);
        $validateData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
        ]);

      
        $data->update($validateData);
        return redirect('data-anggota');
    }
    public function destroy($id)
    {
        $data = DataAnggota::findorfail($id);
        $data->delete();
        return back();
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }
}
