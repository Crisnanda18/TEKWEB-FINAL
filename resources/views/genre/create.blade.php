@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Film Genres</div>

                <div class="card-body">
                    <form action="{{ route('genre.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <label class="label col-md-2" for="name">Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Genre">
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="submit" class="btn cat btn-sm btn-success" value="Add">
                                <a href="{{ route('genre.index') }}" class="btn btn-sm btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
