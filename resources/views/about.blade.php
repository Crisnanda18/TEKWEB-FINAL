@extends ('layouts.newapp')

@section('content')
<link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<style>
    li{
        margin-top: 30px;
        color: #bdf347;
        font-size: 20px;
    }
</style>

<div class="container-xxl">
    <div class="row d-flex">
        <div class="col-12 mt-5 text-center">
            <h3 class="card-title" style="color:#bdf347">about us</h3>
            <hr class="divider">
        </div>
    </div>

    <div class="row d-flex mt-5">
        <div class="col-3">
            <img src="assets/nanda.jpg" style="border-radius: 100%;" alt="" width="250">
        </div>
        <div class="col-4 mt-3">
            <div class="text-center">
                <h3 class="card-title" style="color:#bdf347">Crisnanda Agung Salvatoni</h3>
                <hr class="divider mx-auto" style="width: 50%;">
            </div>
            <div class="row mt-5">
                <li style="color: #bdf347;">
                     <i class="fa-solid fa-circle-user fa-lg" style="color: #bdf347;"></i>
                    <span style="color: #bdf347;">   C14220198</span>
                </li>
                <li>
                    <span style="color: #bdf347;"> Landing Page, Film Homepage</span>
                </li>
                <li>
                    <span style="color: #bdf347;"> CRUD Film, Review, Kategori</span>
                </li>
                <li>
                    <span style="color: #bdf347;"> Role (Middleware)</span>
                </li>
                <li>
                    <span style="color: #bdf347;"> Ajax Live Search</span>
                </li>
            </div>
        </div>
        </div>
        <div class="col-5">

        </div>
    </div>
</div>

<div class="container-xxl">
    <div class="row d-flex mt-5">
        <div class="col-3">
            <img src="assets/vic.jpg" style="border-radius: 100%;" alt="" width="250">
        </div>
        <div class="col-4 mt-3">
            <div class="text-center">
                <h3 class="card-title" style="color:#bdf347">Victor Chia</h3>
                <hr class="divider mx-auto" style="width: 50%;">
            </div>
                <div class="row mt-5">
                    <li style="color: #bdf347;">
                         <i class="fa-solid fa-circle-user fa-lg" style="color: #bdf347;"></i>
                        <span style="color: #bdf347;">   C14220165</span>
                    </li>
                    <li>
                        <span style="color: #bdf347;"> Profile pages, Sidebar</span>
                    </li>
                    <li>
                        <span style="color: #bdf347;"> Login, Register</span>
                    </li>
                    <li>
                    <span style="color: #bdf347;"> Role (Middleware)</span>
                    </li>
                </div>
        </div>
        </div>
        <div class="col-5">
            
        </div>
    </div>
</div>


<div class="container-xxl">
    <div class="row d-flex mt-5">
        <div class="col-3">
            <img src="assets/gab.jpg" style="border-radius: 100%;" alt="" width="250">
        </div>
        <div class="col-4 mt-3">
            <div class="text-center">
                <h3 class="card-title" style="color:#bdf347">Gabriell Gonardo</h3>
                <hr class="divider mx-auto" style="width: 50%;">
            </div>
                <div class="row mt-5">
                    <li style="color: #bdf347;">
                         <i class="fa-solid fa-circle-user fa-lg" style="color: #bdf347;"></i>
                        <span style="color: #bdf347;">   C14220232</span>
                    </li>
                    <li>
                        <span style="color: #bdf347;"> Proposal, Migrations</span>
                    </li>
                    <li>
                        <span style="color: #bdf347;"> Film Homepage, Showcase Page</span>
                    </li>
                    <li>
                        <span style="color: #bdf347;"> CRUD Genre, Logout</span>
                    </li>
                </div>
        </div>
        </div>
        <div class="col-5">
            
        </div>
    </div>
</div>

<div class="container-xxl">
    <div class="row d-flex mt-5">
        <div class="col-3">
            <img src="assets/manda.jpg" style="border-radius: 100%;" alt="" width="250">
        </div>
        <div class="col-4 mt-3">
            <div class="text-center">
                <h3 class="card-title" style="color:#bdf347">Amanda Angelia Bilinda</h3>
                <hr class="divider mx-auto" style="width: 50%;">
            </div>
                <div class="row mt-5">
                    <li style="color: #bdf347;">
                         <i class="fa-solid fa-circle-user fa-lg" style="color: #bdf347;"></i>
                        <span style="color: #bdf347;">   C14220008</span>
                    </li>
                    <li>
                        <span style="color: #bdf347;"> Proposal, Migrations</span>
                    </li>
                    <li>
                        <span style="color: #bdf347;"> ERD Design</span>
                    </li>
                    <li>
                        <span style="color: #bdf347;"> Index pages, About Page</span>
                    </li>
                </div>
        </div>
        </div>
        <div class="col-5">
            
        </div>
    </div>
</div>

@endsection