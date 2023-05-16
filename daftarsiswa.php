<?php
include 'fungsi.php';

$pdo = pdo_connect_mysql();
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 10;


$stmt = $pdo->prepare('SELECT * FROM data_list ORDER BY no LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

$num_contacts = $pdo->query('SELECT COUNT(*) FROM data_list')->fetchColumn();
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UTS PRAKTIKUM PBW</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" type="text/css" href="list.css">
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
                            <a class="nav-link link-light" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white; font-weight: bold;" href="#">Daftar Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="#">Informasi Tugas</a>
                        </li>
                        <button type="button" class="btn btn-light rounded-4">Logout</button>
                    </ul>
                </div>
            </nav>
        </section>
        <section">
            <div class="tulisan">
                <h1>
                    DAFTAR MAHASISWA <br>PRAKTIKUM PEMROGRAMAN BERBASIS WEB
                </h1>
            </div>
            <div class="isian p-4 mb-1 bg-body-tertiary">
                <table class="table table-striped">
                    <a type="button" class="btn btn-success" style="font-weight: bold;" href="tambah.php">Tambah Data</a>
                    <button type="button" class="btn btn-danger" style="margin-left: 5px; font-weight: bold;">Cetak Laporan <i class="bi bi-card-text"></i></button>
                    <div class="col-lg-4 col-md-4 mr-auto col-xs-12 text-right searcharea">
                        <form role="search" method="get" class="search-form cari" action="">
                            <input type="search" class="search-field cari rounded-3" placeholder=" Cari Berdasarkan NIM">
                            <button type="submit" class="search-submit cari rounded-end-3" style="width: 30px; background-color: aqua;">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>
                    <br>
                    <thead>
                        <tr class="table-primary" style="font-weight: bold;">
                            <td class="text-center">No</td>
                            <td class="text-center">NIM</td>
                            <td class="text-center">Nama</td>
                            <td>Dosen</td>
                            <td>Status</td>
                            <td>Ket</td>
                            <td colspan="2" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <td><?=$contact['no']?></td>
                            <td><?=$contact['nim']?></td>
                            <td><?=$contact['nama']?></td>
                            <td><?=$contact['dosen']?></td>
                            <td><?=$contact['status']?></td>
                            <td><?=$contact['keterangan']?></td>
                            <td class="actions">
                            <td>
                                <a href="edit.php?no=<?=$contact['no']?>" class="btn btn-warning">Edit</a>
			      	            <a href="hapus.php?no=<?=$contact['no']?>" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>