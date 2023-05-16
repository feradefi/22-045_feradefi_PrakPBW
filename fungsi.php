<?php
function pdo_connect_mysql() { //digunakan untuk membuat koneksi ke database 
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'prak_pbw';
    //mengembalikan objek PDO. Jika terjadi kesalahan, pesan kesalahan akan ditampilkan.
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	exit('Failed to connect to database!');
    }
}
function template_header($title) {
    // digunakan untuk menampilkan header template HTML dengan judul halaman yang diberikan. 
echo <<<EOT

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Data</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" type="text/css" href="styleproses.css">
    </head>
    <body>
        <section class="navbar"> 
            <nav class="navbar navbar-brand fixed-top">
                <div class="container"> 
                    <div class="navbar style-logo">PBW</div>
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
                            <a class="nav-link link-light" aria-current="page" href="home.php">Home</a>
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
        
EOT;
}
function template_footer() {
    // digunakan untuk menampilkan header template HTML
echo <<<EOT
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
EOT;
}
?>