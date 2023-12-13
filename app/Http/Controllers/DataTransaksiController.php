<?php

namespace App\Http\Controllers;

use App\Models\DataTransaksi;
use App\Models\DataAnggota;
use App\Models\DataBuku;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DataTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $data = DataTransaksi::paginate(5);
        return view('datatransaksi',compact('data'),[
      
            'anggota' => DataAnggota::get(),
            'transaksi' => DataTransaksi::get(),
            'buku' => DataBuku::get(),
           
            
        ]);
    }

    public function add()
    {
      
        return view('tambahdatatransaksi', [
          
            'anggota' => DataAnggota::get(),
            'transaksi' => DataTransaksi::get(),
            'buku' => DataBuku::get(),
           
        ]);
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function simpan(Request $request)
    {
        
        DataTransaksi::create($request->all());

        return redirect('data-pinjam');
    

    }

    public function edit($id)
    {
        $data = DataTransaksi::findorfail($id);
        return view('editdatatransaksi', compact('data'), [
          
            'anggota' => DataAnggota::get(),
            'transaksi' => DataTransaksi::get(),
            'buku' => DataBuku::get(),
           
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = DataTransaksi::find($id);
        $validateData = $request->validate([
            'ID_Anggota' => 'required',
            'buku' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);
        $data->update($validateData);
      
        return redirect('data-pinjam');
    }
    public function destroy($id)
    {
        $data = DataTransaksi::findorfail($id);
        $data->delete();
        return back();
    }
}
