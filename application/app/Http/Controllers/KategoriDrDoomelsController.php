<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Models\Berita;
use App\Models\KategoriBerita;

class KategoriDrDoomelsController extends Controller
{
  public function index()
  {
    // if (Auth::user()->level=="1") {
    //   $getkategori = KategoriBerita::where([
    //     ['id_skpd', null],
    //     ['flag_utama','!=',1]
    //   ])->paginate(10);
    // } else {
    //   $getkategori = KategoriBerita::where([
    //     ['id_skpd', Auth::user()->masterskpd->id],
    //     ['flag_utama','!=',1]
    //   ])->paginate(10);
    // }
    $getkategori = KategoriBerita::where('flag_utama', 1)->paginate(10);

    return view('backend/pages/kategoridrdoomels')->with('getkategori', $getkategori);
  }

  public function store(Request $request)
  {
    $set = new KategoriBerita;
      $set->id_user = Auth::user()->id;
      $set->nama_kategori = $request->nama_kategori;
      $set->keterangan_kategori = $request->keterangan_kategori;
      $set->flag_kategori = $request->flag_kategori;
      $set->flag_utama = 1;
      $set->save();
      
    return redirect()->route('drdoomels.kategori.index')->with('message', 'Berhasil memasukkan data kategori baru.');
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

    return redirect()->route('drdoomels.kategori.index')->with('message', 'Berhasil mengubah status kategori.');
  }

  public function edit(Request $request)
  {
    $set = KategoriBerita::find($request->id);
    $set->nama_kategori = $request->nama_kategori;
    $set->keterangan_kategori = $request->keterangan_kategori;
    $set->save();

    return redirect()->route('drdoomels.kategori.index')->with('message', 'Berhasil mengubah data kategori berita.');
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
      return redirect()->route('drdoomels.kategori.index')->with('message', 'Berhasil menghapus data kategori berita.');
    } else {
      return redirect()->route('drdoomels.kategori.index')->with('messagefail', 'Gagal melakukan hapus data. Data kategori berita telah memiliki relasi dengan data yang lain.');
    }
  }
}
