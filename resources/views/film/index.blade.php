@extends('layouts.newapp')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
  .container-fluid{
    margin-top: -55px;
    z-index: 0;
  }
</style>
<div class="row">
<div class="container-fluid">
<div class="row mb-3">
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" 
                  class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" 
                  aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" 
                  aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/deadpool.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e5fd7346-eed0-4416-8203-58b0d230afe3/dfejc59-840f2ad8-99e7-4d26-b074-278903d6ef94.png/v1/fill/w_1280,h_336/deadpool_logo_png___disney__variant_by_bats66_dfejc59-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MzM2IiwicGF0aCI6IlwvZlwvZTVmZDczNDYtZWVkMC00NDE2LTgyMDMtNThiMGQyMzBhZmUzXC9kZmVqYzU5LTg0MGYyYWQ4LTk5ZTctNGQyNi1iMDc0LTI3ODkwM2Q2ZWY5NC5wbmciLCJ3aWR0aCI6Ijw9MTI4MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.TtVRR8Wyvk-ux6UU1z15q7qPV7JwgtcHmB7AkqjgdYg" alt="" style="z-index: 99;" width="500">
                        <p style="color: chartreuse; font-weight: bold;">Watch Now!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/spiderman.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Spider-Man_ITSV.png" alt="" style="z-index: 99;" width="400">
                        <p style="color: chartreuse; font-weight: bold;">Watch Now!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/bp.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <img src="https://1000logos.net/wp-content/uploads/2018/12/Black-Panther-Logo.png" alt="" style="z-index: 99;" width="300">
                        <p style="color: chartreuse; font-weight: bold;">Watch Now!</p>
                      </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" 
                data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
</div>
</div>
<div class="container mt-5">
        <div class="row"  data-aos="zoom-in-down" style="">
            <div class="col-12" style="margin-top: 20px;">
                <h1 style="color: rgb(166, 238, 95);" align="center">new releases</h1>
                <hr class="divider" style="background-color: rgb(166, 238, 95); width: 100px; height: 2px; border-radius: 5px;">
            </div>
        </div>

        <div class="row">
          <div class="container-xxl pt-3 d-flex flex-wrap flex-row justify-content-around">
              @forelse($film as $key => $item)
              <a href="{{route('film.show',['id'=>$item->id]) }}">
              <div class="card-container mt-3">
                  <div class="card" data-aos="flip-left" data-aos-duration="50000" style="width: 18rem; border: 1px solid black;">
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
             <p style="color: white;">There's nothing new</p>
             @endforelse
    
          </div>
          </div>

        <div class="row"style="margin-top: 100px;">
            <div class="col-12" >
                <h1 style="color: rgb(166, 238, 95);" align="center">swoonworthy</h1>
                <hr class="divider" style="background-color: rgb(166, 238, 95); width: 100px; height: 2px; border-radius: 5px;">
            </div>
        </div>

        <div class="row">
        <div class="container-xxl pt-3 d-flex flex-wrap flex-row justify-content-around">
              @forelse($swoon as $key => $item)
              <a href="{{route('film.show',['id'=>$item->id]) }}">
              <div class="card-container">
                  <div class="card" data-aos="flip-right" data-aos-duration="9000" style="width: 18rem; border: 1px solid black;">
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
    <p style="color: white;">There's nothing new</p>
    @endforelse
    
    </div>
    </div>

        <div class="row" style="margin-top: 100px;">
            <div class="col-12" style="margin-top: 30px;">
                <h1 style="color: rgb(166, 238, 95);" align="center">lots of laugh</h1>
                <hr class="divider" style="background-color: rgb(166, 238, 95); width: 100px; height: 2px; border-radius: 5px;">
            </div>
        </div>

        <div class="row" >
        <div class="container-xxl pt-3 d-flex flex-wrap flex-row justify-content-around">
              @forelse($comedy as $key => $item)
              <a href="{{route('film.show',['id'=>$item->id]) }}">
              <div class="card-container">
                  <div class="card" data-aos="flip-right" data-aos-duration="9000" style="width: 18rem; border: 1px solid black;">
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
    <p style="color: white;">There's nothing new</p>
    @endforelse
    
    </div>
    </div>

    </div>
    <script>
   AOS.init();
    </script>
@endsection
