<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index','show');
        $this->middleware('is_admin')->except('index','show');
    }

    public function index(){
        $genre = Genre::all();
        return view('genre.index', compact('genre'));
    }

    public function create(){
        return view('genre.create');
    }

    public function store(Request $request){
        $genre = new Genre();
        $genre->name = $request->name;
        if($genre->save()){
            return redirect()->route('genre.index')->with('success','Data added successfully');
        }
        return redirect()->route('genre.index')->with('error','Data failed to be added');
    }

    public function edit($id){
        $genre = Genre::find($id);
        return view('genre.edit',['genre'=>$genre]);
    }

    public function update(Request $request, $id){
        $genre = Genre::find($id);
        $genre->name = $request->name;
        if($genre->save()){
            return redirect()->route('genre.index')->with('success','Data changed successfully');
        }
        return redirect()->route('genre.index')->with('error','Data failed to be changed');
    }

    public function destroy($id){
        $genre = Genre::find($id);
        if($genre->delete()){
            return redirect()->route('genre.index')->with('success','Data deleted successfully');
        }
        return redirect()->route('genre.index')->with('error','Data failed to be deleted');
    }

    public function show($id){
        $genre = Genre::find($id);
        $film = DB::table('film')->where('genre_id', $id)->get();
        return view('genre.detail', compact('genre','film'));
    }
}
