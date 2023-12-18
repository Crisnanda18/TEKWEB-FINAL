<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bolt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('assets/icon.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
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
                        <div class="profiles-gate-container mt-4">
                            <div class="centered-div list-profiles-container">
                                <div class="list-profiles">
                                    <h1 class="profile-gate-label text-center mb-4">Who's watching?</h1>
                                    <!-- Profil pertama -->
                                    <div class="row justify-content-around">
                                        <div class="col-md-2 mb-4 profile-card">
                                            <a href="profile1.html">
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
                                            <a href="profile2.html">
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
                                            <a href="profile3.html">
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
                                            <a href="profile4.html">
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
                                            <a href="profile5.html">
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
    <script>
        $(document).ready(function() {
            $("#button-logout").click(function() {
                $.ajax({
                    url: '{{ route('logout') }}',
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        window.location.href = "/login"; // redirect to login page
                    }
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"
        integrity="sha384-dzWVq8G1Ug1zXWKY6/5UqU5qzOFlsdm/S5SHzDtpTf68Ihq9HHDtGz9mm47jkjfn"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgydN1u1IXpL00ddDJO/0R5rqQD9PRuH8fD5C+M5S8ATpWcU6M4lXoCCbJ6"
        crossorigin="anonymous"></script>
</body>
</html>
