<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\KategoriFilm;
use App\Models\Genre;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index','show');
        $this->middleware('is_admin')->except('index','show');
    }

    public function index(){
        $film = Film::all();
        $swoon = DB::table('film')
                ->join('genre', 'film.genre_id', '=', 'genre.id')
                ->where('genre.name', 'Swoonworthy')
                ->select('film.*') // select all attributes from films
                ->get();
         $comedy = DB::table('film')
                ->join('genre', 'film.genre_id', '=', 'genre.id')
                ->where('genre.name', 'Comedy')
                ->select('film.*') // select all attributes from films
                ->get();
        return view('film.index', compact('film','swoon','comedy'));
    }

    public function adminidx(){
        $film = Film::all();
        return view('film.adminidx', compact('film'));
    }

    public function create(){
        $kategori = KategoriFilm::all(); 
        $genre = Genre::all();
        return view('film.create', compact('kategori','genre'));
    }
    
    public function store(Request $request){

        $request->validate([
            'judul' => 'required',
            'sinopsis' => 'required',
            'tahun' => 'required',
            'poster' => 'required',
            'sutradara' => 'required',
            'video_link' => 'required',
            'kategori_id' => 'required',
            'genre_id' => 'required',
        ]);

        $newposter = $request->file('poster')->getClientOriginalName();
        $request->file('poster')->move('poster/',$newposter);

        $film = new Film();
        $film->judul = $request->judul;
        $film->sinopsis = $request->sinopsis;
        $film->tahun = $request->tahun;
        $film->poster = $newposter;
        $film->sutradara = $request->sutradara;
        $film->video_link = $request->video_link;
        $film->kategori_id = $request->kategori_id;
        $film->genre_id = $request->genre_id;

        if($film->save()){
            return redirect()->route('film.adminidx')->with('success','Data added successfully');
        }
        return redirect()->route('film.adminidx')->with('error','Data failed to be added');
    }

    public function edit($id){
        $film = Film::find($id);
        $kategori = KategoriFilm::all(); 
        $genre = Genre::all(); // fetch all genres
        return view('film.edit', compact('film', 'kategori', 'genre')); // pass film, kategori, and genres to the view
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'sinopsis' => 'required',
            'tahun' => 'required',
            'poster' => 'required',
            'sutradara' => 'required',
            'video_link' => 'required',
            'kategori_id' => 'required',
            'genre_id' => 'required',
        ]);
        //store new uploaded poster
        $newposter = $request->file('poster')->getClientOriginalName();
        $request->file('poster')->move('poster/',$newposter);

        $film = Film::find($id);
        $film->judul = $request->judul;
        $film->sinopsis = $request->sinopsis;
        $film->tahun = $request->tahun;
        $film->poster = $newposter;
        $film->sutradara = $request->sutradara;
        $film->video_link = $request->video_link;
        $film->kategori_id = $request->kategori_id;
        $film->genre_id = $request->genre_id;

        if($film->save()){
            return redirect()->route('film.adminidx')->with('success','Data changed successfully');
        }
        return redirect()->route('film.adminidx')->with('error','Data failed to be changed');
    }

    public function destroy($id){
        $film = Film::find($id);
        if($film->delete()){
            return redirect()->route('film.adminidx')->with('success','Data deleted successfully');
        }
        return redirect()->route('film.adminidx')->with('error','Data failed to be deleted');
    }

    public function show($id){
        $film = Film::find($id);
        $review = DB::table('review')
                ->join('users', 'review.user_id', '=', 'users.id')
                ->where('review.film_id', $id)
                ->select('review.*', 'users.name')
                ->get();
        $avg = round(DB::table('review')->where('film_id', $id)->avg('rating'), 1);
        return view('film.info', compact('film','review','avg'));
    }
    
    public function searchidx(){
        return view('film.search');
    }
}
