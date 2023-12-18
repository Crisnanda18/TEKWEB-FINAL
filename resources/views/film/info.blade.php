@extends('layouts.newapp')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/scss.css') }}">
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
<script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>

<div class="container" style="margin-top: 80px;">
    <div class="row">
      <div class="col-5">
        <div class="row">
        <img src="{{ asset('/poster/'.$film->poster) }}" width="400" style="border-radius: 15px;">
        </div>
      </div>
      <div class="col-7 mt-2">
        <div style="display: flex; justify-content: flex-start; align-items: center;">
          <h2 class="card-title" style="font-weight: bold; color: #97d70f;">{{$film->judul}} <span>({{$film->tahun}})</span></h2>
          <h5 class="card-title" style="color: #bdf347; font-size: 24px; margin-left: 20px;"> 
            <span><i class="fa-solid fa-star" style="color: #bdf347;"></i></span>{{ $avg }}
          </h5>
        </div>
        <h5 class="text mt-2"  style="color: #97d70f;">Director: <span style="color: white"; >{{$film->sutradara}}</span></h5>
        <p class="card-text" style="color: #97d70f;">{{$film->sinopsis}}</p>
        <a href="{{ route('kategori.show',['id'=>$film->kategori->id]) }}">
             <div class="badge text-wrap" style="width: 6rem; background-color: #8bc410; color: #ffffff;">
            {{$film->kategori->nama}}
            </div>
        </a>
       <a href="{{ route('genre.show',['id'=>$film->genre->id]) }}">
        <div class="badge text-wrap" style="width: 6rem; background-color: #8bc410; color: #ffffff;">
            {{$film->genre->name}}
        </div>
       </a>
        
      </div>
    </div>
    <div class="row" style="margin-top: 90px;">
        <div class="col-12">
            <h2 class="card-title" id="watch-now" align="center" style="font-weight: bold; color: #97d70f;">Watch Now</h2>
            <hr class="divider" style="width: 50%; margin-left: auto; margin-right: auto;">
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <<div class="plyr__video-embed" id="player">
        <iframe
          src="{{$film->video_link}}"
          allowfullscreen
          allowtransparency
          allow="autoplay"></iframe>
    </div>
    </div>
    </div>
</div>

<div class="row" style="margin-top: 90px;">
    <div class="col-12">
        <h2 class="card-title" id="watch-now" align="center" style="font-weight: bold; color: #97d70f;">Boltizen's Reviews</h2>
        <hr class="divider" style="width: 50%; margin-left: auto; margin-right: auto;">
    </div>
</div>
<div class="row" style="margin-top: 90px;">
<div class="col-4"></div>
    <div class="col-4">
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    </div>
<div class="col-4"></div>
</div>

@forelse($film->review as $key => $item)
<div class="container mt-3">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-6">
        <h5 class="card-title text-dark"> <span><i class="fa-solid fa-circle-user" style="color: #272d1a;"></i></span> {{$item->user->name}}</h5>
        </div>
        <div class="col-4">

        </div>
        <div class="col-2">
          <h5 class="card-title text-dark" style="margin-left: 130px"> <span><i class="fa-solid fa-star" style="color: #272d1a;"></i></span>{{$item->rating}}</h5>
        </div>
      </div>
    </div>
    <div class="card-body">
      <p class="card-text">{{$item -> komentar}}</p>
    </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-2">
        @if (Auth::id() === $item->user_id)
          <a href="#" onclick="deleteData('{{ route('review.destroy',['id'=>$item->id]) }}')" id="delbtn" >Delete</a>
        @endif
        </div>
        <div class="col-8"></div>
        <div class="col-2"><p class="card-text"><small class="text-muted">{{$item -> created_at}}</small></p>
      </div>
      </div>
    </div>
  </div>
</div>
@empty
<p style="color: white;">There's no review yet</p>
@endforelse


<div class="container mt-3">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-3"><h3 class="card-title">Review Section</h3></div>
        <div class="col-5"></div>
        <div class="col-4">
          <h4></h4>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form action="{{route('review.store')}}" method="POST">
        @csrf
    <textarea required="required" name="komentar" id="komentar" style="background-color: var(--grey-10); margin-bottom: 0px; width: 100%;"></textarea>
    <input type="hidden" name="film_id" value="{{$film->id}}">

    <div class="row rating">
      <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
      <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
      <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
      <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
      <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
      <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
          <button type="submit" class="btn cat">Add</button>
        </div>
      </div>
    </div>
    </form>
    </div>
  </div>
</div>
<form action="" method="POST" id="form-delete">
    @csrf
    @method('DELETE')
</form>
<script>
    function deleteData(url){
        var cek=confirm('Are you sure you want to delete this data?');
        if(cek){
            $('#form-delete').attr('action',url);
            $('#form-delete').submit();
        }
    }
</script>
<script>
  const player = new Plyr('#player');

  document.addEventListener('DOMContentLoaded', function() {
    const player = new Plyr('#player');
  });
</script>
@endsection