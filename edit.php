<?php
include 'fungsi.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['no'])) {
    if (!empty($_POST)) {
        $no = isset($_POST['no']) ? $_POST['no'] : NULL;
        $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $dosen = isset($_POST['dosen']) ? $_POST['dosen'] : '';
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE data_list SET no = ?, nim = ?, nama = ?, dosen = ?, status = ?, keterangan = ? WHERE no = ?');
        $stmt->execute([$no, $nim, $nama, $dosen, $status, $keterangan, $_GET['no']]);
        $msg = 'edit Data Berhasil!';
        header('Location: daftarsiswa.php');
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM data_list WHERE no = ?');
    $stmt->execute([$_GET['no']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('data list tidak ditemukan!');
    }
} else {
    exit('Tidak ada data yang cocok!');
}
?>



<?=template_header('edit')?>
    <section>
    <div class="isian card">
        <div class="card-body">
            <form action="edit.php?no=<?=$contact['no']?>" method="post">
            <h2 class="card-title judul">Edit Data</h2>
            <div class="mb-3">
                    <label for="no">No :</label><br>
                    <input type="text" name="no" value="<?=$contact['no']?>" id="no" class="form-control"> 
                </div>
                <div class="mb-3">
                    <label for="nim">NIM :</label><br>
                    <input type="number" name="nim" value="<?=$contact['nim']?>" id="nim" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nama">Nama : </label><br>
                    <input type="text" name="nama" value="<?=$contact['nama']?>" id="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dosen">Dosen :</label><br>
                    <input type="text" name="dosen" value="<?=$contact['dosen']?>" id="dosen" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status">Status :</label><br>
                    <input type="text" name="status" value="<?=$contact['status']?>" id="status" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="keterangan">Keterangan :</label><br>
                    <input type="text" name="keterangan" value="<?=$contact['keterangan']?>" id="keterangan" class="form-control">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <button type="submit" value="edit" class="btn btn-primary">Edit</button>
                    <a href="daftarsiswa.php" type="submit" class="btn btn-outline-secondary">Cencel</a>
                </div>
                <?php if ($msg): ?>
                <p><?=$msg?></p>
                <?php endif; ?>
            </div>
        </div>
    </form>
</div>
</section>
<?=template_footer()?>
