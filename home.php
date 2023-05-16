<?php
include 'fungsi.php';

?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas Bootstrap</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="home.css">
    </head>
    <body>
        <section class="navbar"> 
            <nav class="navbar navbar-brand fixed-top">
                <div class="container"> 
                    <div class="navbar style-logo">PBW</div>
                    <div class="navbar user">Selamat Datang, Fera Defi Susanti</div>
                </div> 
                <button class="navbar-toggler text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#slide" aria-controls="slide">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" style="background-color: #002f5c;" tabindex="-1" id="slide" aria-labelledby="slideLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="slideLabel">Praktikum PBW A</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white; font-weight: bold;" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="daftarsiswa.php">Daftar Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="#">Informasi Tugas</a>
                        </li>
                        <button type="button" class="btn btn-light rounded-4">Logout</button>
                    </ul>
                </div>
            </nav>
        </section>
        <section>
            <div class="tulisan">
                <h1>
                    WEBSITE PRAKTIKUM <br>PEMROGRAMAN BERBASIS WEB
                </h1>
            </div>
            <div class="bagian">
                <div class="row row-cols-4 row-cols-md-3 g-4">
                    <div class="col-3">
                        <div class="card rounded-4" >
                            <img src="profil2.png" class="d-block w-100 h-70  rounded-top-4">
                            <div class="card-body">
                            <h5 class="card-title">FERA DEFI SUSANTI<span><br>220441100045</span></h5><br>
                            <p class="card-text">Halloo.. perkenalkan nama saya Fera Defi Susanti, sapaan ku Fera, saya adalah mahasiswa prodi sistem informasi universitas trunojoyo madura, hobi saya adalah mengerjakan tugas tepat waktu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card rounded-4" >
                            <img src="profil2.png" class="d-block w-100 h-80  rounded-top-4">
                            <div class="card-body">
                            <h5 class="card-title">FERA DEFI SUSANTI<span><br>220441100045</span></h5><br>
                            <p class="card-text">Halloo.. perkenalkan nama saya Fera Defi Susanti, sapaan ku Fera, saya adalah mahasiswa prodi sistem informasi universitas trunojoyo madura, hobi saya adalah mengerjakan tugas tepat waktu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card rounded-4" >
                            <img src="profil2.png" class="d-block w-80 h-80  rounded-top-4">
                            <div class="card-body">
                            <h5 class="card-title">FERA DEFI SUSANTI<span><br>220441100045</span></h5><br>
                            <p class="card-text">Halloo.. perkenalkan nama saya Fera Defi Susanti, sapaan ku Fera, saya adalah mahasiswa prodi sistem informasi universitas trunojoyo madura, hobi saya adalah mengerjakan tugas tepat waktu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>