<?php

namespace App\Http\Controllers;

use App\Models\DataBuku;
use Illuminate\Http\Request;

class DataBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataBuku::paginate(5);
        return view('databuku', compact('data'));
    }

    public function add()
    {
        return view('tambahdatabuku');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function simpan(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori' => 'required',
        ]);

        DataBuku::create($validateData);
        return redirect('data-buku');
    

    }

    public function edit($id)
    {
        // $data = DataBuku::findorfail($id);
        // return view('editdatabuku', compact('data'));
        $data = DataBuku::findorfail($id);
        return view('editdatabuku', compact('data'), [
            'buku' => DataBuku::get(),
           
        ]);    }

    public function update(Request $request, $id)
    {
        $data = DataBuku::find($id);
        $validateData = $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori' => 'required',
        ]);

      
        $data->update($validateData);
        return redirect('data-buku');
    }
    public function destroy($id)
    {
        $data = DataBuku::findorfail($id);
        $data->delete();
        return back();
        // return redirect('data-user')->with('success', 'Data Berhasil Diupdate');
    }
}
