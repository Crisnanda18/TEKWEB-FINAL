@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Film Update Page</div>

                <div class="card-body">
                    <form action="{{ route('film.update',['id'=>$film->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <label class="label col-md-2" for="judul">Nama</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="judul" id="judul" value="{{ $film->judul }}" placeholder="Film title">
                            </div>                            
                        </div>
                        <div class="row">
                            <label class="label col-md-2" for="sinopsis">Sinopsis</label>
                            <div class="col-md-10">
                            <textarea name="sinopsis" class="form-control" id="sinopsis" cols="30" rows="10"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2" for="tahun">Tahun</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="tahun" id="tahun" value="{{ $film->tahun }}" placeholder="Tahun">
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2" for="poster">Poster</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" name="poster" id="poster" placeholder="Poster">
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2" for="sutradara">Sutradara</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="sutradara" id="sutradara" value="{{ $film->sutradara }}" placeholder="Sutradara">
                            </div>

                        </div>
                        <div class="row">
                            <label class="label col-md-2" for="video_link">Video Link</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="video_link" id="video_link" value="{{ $film->video_link }}" placeholder="Video Link">
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2" for="kategori_id">Kategori</label>
                            <div class="col-md-10">
                                <select name="kategori_id" id="kategori_id" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach($kategori as $row)
                                    <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="label col-md-2" for="genre_id">Genre</label>
                            <div class="col-md-10">
                                <select name="genre_id" id="genre_id" class="form-control">
                                    <option value="">Pilih Genre</option>
                                    @foreach($genre as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="submit" class="btn cat btn-sm btn-success" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
