<?php
include 'fungsi.php';
$pdo = pdo_connect_mysql();//dipanggil untuk membuat koneksi ke database MySQL 
$msg = '';

// Dapatkan nomor terakhir dari database
$stmt = $pdo->query('SELECT no FROM data_list ORDER BY no DESC LIMIT 1');
$lastNo = $stmt->fetchColumn();
// deteksi angka terakhir untuk mendapatkan nomor berikutnya
$nextNo = $lastNo + 1;

if (!empty($_POST)) { //untuk memeriksa apakah sebuah variabel kosong atau tidak.
    $no = isset($_POST['no']) && !empty($_POST['no']) && $_POST['no'] != 'auto' ? $_POST['no'] : $nextNo;
    $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $dosen = isset($_POST['dosen']) ? $_POST['dosen'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';


   // Jika ada field yang kosong, tampilkan pesan error
   if (empty($nim) || empty($nama) || empty($dosen) || empty($status) || empty($keterangan)) {
    $msg = 'Harap isi semua data';
} else {
    $stmt = $pdo->prepare('INSERT INTO data_list VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$no, $nim, $nama, $dosen, $status, $keterangan]);
    if ($stmt->rowCount()) {
        $msg = 'Data berhasil ditambahkan';
    } else {
        $msg = 'Gagal menambahkan data';
    }
}
}

// Tampilkan pesan sukses/gagal
if ($msg) {
echo '<div>', $msg, '</div>';
}?>


<?=template_header('tambah')?>
        <section>
            <div class="isian card">
                <div class="card-body">
                    <form action="tambah.php" method="post">
                    <h2 class="card-title judul">Tambah Data</h2>
                        <div class="mb-3">
                            <label for="no">No :</label><br>
                            <input type="text" name="no" value="auto" id="no" class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label for="nim">NIM :</label><br>
                            <input type="number" name="nim" id="nim" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="nama">Nama : </label><br>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="dosen">Dosen :</label><br>
                            <input type="text" name="dosen" id="dosen" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="status">Status :</label><br>
                            <input type="text" name="status" id="status" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan">Keterangan :</label><br>
                            <input type="text" name="keterangan" id="keterangan" class="form-control">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mb-3">
                            <button type="submit" value='tambah' class="btn btn-primary">Tambah</button>
                            <a href="daftarsiswa.php" type="submit" class="btn btn-outline-secondary">Cencel</a>
                        </div>
                        <?php if ($msg): ?>
                        <p><?=$msg?></p>
                        <?php endif; ?>
                </form>
            </div>
        </div>
        </section>
        
<?=template_footer()?>



