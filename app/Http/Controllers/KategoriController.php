<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriFilm;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('index','show');
        $this->middleware('is_admin')->except('index','show');
    }

    public function index()
    {
        $kategori = KategoriFilm::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request){
        $kategori = new KategoriFilm();
        $kategori->nama = $request->nama;
        if($kategori->save()){
            return redirect()->route('kategori.index')->with('success','Data added successfully');
        }
        return redirect()->route('kategori.index')->with('error','Data failed to be added');
    }

    public function edit($id){
        $kategori = KategoriFilm::find($id);
        return view('kategori.edit',['kategori'=>$kategori]);
    }

    public function update(Request $request, $id){
        $kategori = KategoriFilm::find($id);
        $kategori->nama = $request->nama;
        if($kategori->save()){
            return redirect()->route('kategori.index')->with('success','Data changed successfully');
        }
        return redirect()->route('kategori.index')->with('error','Data failed to be changed');
    }

    public function destroy($id){
        $kategori = KategoriFilm::find($id);
        if($kategori->delete()){
            return redirect()->route('kategori.index')->with('success','Data deleted successfully');
        }
        return redirect()->route('kategori.index')->with('error','Data failed to be deleted');
    }

    public function show($id){
        $kategori = KategoriFilm::find($id);
        $film = DB::table('film')->where('kategori_id', $id)->get();
        return view('kategori.detail',compact('kategori','film'));
    }
}
