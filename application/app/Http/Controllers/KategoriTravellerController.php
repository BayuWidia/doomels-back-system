<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Models\Berita;
use App\Models\KategoriBerita;

class KategoriTravellerController extends Controller
{
  public function index()
  {
    $getkategori = KategoriBerita::where('flag_utama', 3)->paginate(10);

    return view('backend/pages/kategoritraveller')->with('getkategori', $getkategori);
  }

  public function store(Request $request)
  {
    $set = new KategoriBerita;
      $set->id_user = Auth::user()->id;
      $set->nama_kategori = $request->nama_kategori;
      $set->keterangan_kategori = $request->keterangan_kategori;
      $set->flag_kategori = $request->flag_kategori;
      $set->flag_utama = 3;
      $set->save();
      
    return redirect()->route('traveller.kategori.index')->with('message', 'Berhasil memasukkan data kategori baru.');
  }

  public function changeflag($id)
  {
    // dd($id);
      $get = KategoriBerita::find($id);
      if($get->flag_kategori=="1") {
        $get->flag_kategori = "0";
      } elseif($get->flag_kategori=="0") {
        $get->flag_kategori = "1";
      }
      $get->save();
      return redirect()->route('traveller.kategori.index')->with('message', 'Berhasil mengubah status kategori.');    
    } else {
  }

  public function edit(Request $request)
  {
    $set = KategoriBerita::find($request->id);
    $set->nama_kategori = $request->nama_kategori;
    $set->keterangan_kategori = $request->keterangan_kategori;
    $set->save();

    return redirect()->route('traveller.kategori.index')->with('message', 'Berhasil mengubah data kategori berita.');
  }
  public function bind($id)
  {
    $get = KategoriBerita::find($id);
    return $get;
  }
  public function delete($id)
  {
    $check = Berita::where('id_kategori', $id)->first();
    if($check=="") {
      $set = KategoriBerita::find($id);
      $set->delete();
      return redirect()->route('traveller.kategori.index')->with('message', 'Berhasil menghapus data kategori berita.');
    } else {
      return redirect()->route('traveller.kategori.index')->with('messagefail', 'Gagal melakukan hapus data. Data kategori berita telah memiliki relasi dengan data yang lain.');
    }
  }
}
