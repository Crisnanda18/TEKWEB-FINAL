@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div id="appMountPoint">
        <div class="bolt-sans-font-loaded">
            <div dir="ltr" class="">
                <div>
                    <div class="bd dark-background" lang="en-ID" data-uia="container-adult" style="overflow: visible">
                        <div class="pinning-header on-profiles-gate"
                            style="position: sticky; top: 0; height: auto; min-height: 70px; z-index: 1">
                            <div class="pinning-header-container">
                                <div id="clcsBanner" style="overflow: auto"></div>
                                <div class="main-header on-profiles-gate menu-navigation" role="navigation"></div>
                            </div>
                        </div>
                        <div class="profiles-gate-container">
                            <div class="centered-div list-profiles-container">
                                <div class="list-profiles">
                                    <h1 class="profile-gate-label text-center" style="margin-bottom: 2cm;">Who's watching?</h1>
                                    <!-- Profil pertama -->
                                    <div class="row justify-content-around" >
                                        <div class="col-md-2 mb-4 profile-card">
                                            <a href="{{ route('film.index')}}">
                                                <div class="card">
                                                    <img src="assets/avatar1.jpg" class="card-img-top"
                                                        alt="Gambar Profil">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Hanni</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Profil kedua -->
                                        <div class="col-md-2 mb-4 profile-card">
                                            <a href="{{ route('film.index')}}">
                                                <div class="card">
                                                    <img src="assets/avatar2.jpg" class="card-img-top"
                                                        alt="Gambar Profil">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Haerin</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Profil ketiga -->
                                        <div class="col-md-2 mb-4 profile-card">
                                            <a href="{{ route('film.index')}}">
                                                <div class="card">
                                                    <img src="assets/avatar3.jpg" class="card-img-top"
                                                        alt="Gambar Profil">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Minji</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Profil keempat -->
                                        <div class="col-md-2 mb-4 profile-card">
                                            <a href="{{ route('film.index')}}">
                                                <div class="card">
                                                    <img src="assets/avatar4.jpg" class="card-img-top"
                                                        alt="Gambar Profil">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Danielle</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Profil kelima -->
                                        <div class="col-md-2 mb-4 profile-card">
                                            <a href="{{ route('film.index')}}">
                                                <div class="card">
                                                    <img src="assets/avatar5.jpg" class="card-img-top"
                                                        alt="Gambar Profil">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Hyein</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="image-preloaders">
                            <span class="jawbone-images"></span>
                        </div>
                    </div>
                    <div class="visually-hidden screenReaderMessage" role="alert" aria-live="assertive">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
