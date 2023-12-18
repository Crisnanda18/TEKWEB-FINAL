@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Film</div>

                <div class="card-body">
                <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Movie Name</label>
                      <input type="text" class="form-control" name="judul">
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                      <label>Sinopsis</label>
                      <textarea name="sinopsis" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    @error('sinopsis')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                      <label>Tahun</label>
                      <input type="text" class="form-control" name="tahun">
                    </div>
                    @error('tahun')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label>Poster</label>
                        <input type="file" class="form-control" name="poster">
                      </div>
                      @error('poster')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror

                    <div class="form-group">
                        <label>Sutradara</label>
                        <input type="text" class="form-control" name="sutradara">
                        </div>
                        @error('sutradara')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    <div class="form-group">
                        <label>Video Link</label>
                        <input type="text" class="form-control" name="video_link">
                        </div>
                        @error('video_link')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    <div class="form-group">
                      <label>Category</label>
                      <select name="kategori_id" id="" class="form-control">
                        <option value="">--Pilih Kategori--</option>
                        @forelse ($kategori as $item)
                            <option value="{{$item ->id}}">{{$item -> nama}}</option>
                        @empty

                        @endforelse
                      </select>
                    </div>
                    @error('kategori')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                      <label>Genre</label>
                      <select name="genre_id" id="" class="form-control">
                        <option value="">--Pilih Genre--</option>
                        @forelse ($genre as $item)
                            <option value="{{$item ->id}}">{{$item -> name}}</option>
                        @empty

                        @endforelse
                      </select>
                    </div>
                    @error('genre')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn cat mt-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
@endsection

