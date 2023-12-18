@extends('layouts.newapp')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

<div class="row mt-5">
    <div class="container-fluid" align=center>
        <h2 style="color: #97d70f;" >{{$genre->name}} Showcase</h2>
    </div>
</div>

<div class="mt-5">
<div class="container-xxl pt-3 d-flex flex-wrap flex-row justify-content-around">
    @forelse($film as $key => $item)
    <a href="{{route('film.show',['id'=>$item->id]) }}">
    <div class="card-container">
        <div class="card" style="width: 18rem; border: 1px solid black;">
            <img src="{{ asset('/poster/'.$item->poster) }}" class="card-img" alt="...">
            <div class="overlay">
                <i class="fa-regular fa-circle-play fa-fade fa-5x mt-3" style="color: #97d70f;"></i>
                <div class="row mt-3">
                    <h5 style="color: #97d70f;">{{$item -> judul}}</h5>
                </div>
                <div class="row">
                    <h6 align=center style="color: #97d70f;">{{$item -> tahun}}</p>
                </div>
            </div>
        </div>
    </div>
    </a>
    @empty
    <p style="color: white;">There's nothing on {{$genre->name}}</p>
    @endforelse
    
</div>
</div>

<div class="d-flex justify-content-center align-items-center">
        <div class=" mt-3">
            <a href="{{ route('film.index') }}" class="btn btn-warning btn-sm">Back</a>
        </div>
</div>
@endsection