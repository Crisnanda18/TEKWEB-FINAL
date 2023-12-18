@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Film Genres</div>

                <div class="card-body">
                    <form action="{{ route('genre.update',['id'=>$genre->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <label class="label col-md-2" for="name">Nama</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" id="name" value="{{ $genre->name }}" placeholder="Category name">
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
