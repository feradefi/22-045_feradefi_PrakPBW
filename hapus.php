<?php
include 'fungsi.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['no'])) {
    $stmt = $pdo->prepare('SELECT * FROM data_list WHERE no = ?');
    $stmt->execute([$_GET['no']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Location: daftarsiswa.php');
    }
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM data_list WHERE no = ?');
            $stmt->execute([$_GET['no']]);
            $msg = 'Anda telah berhasil menghapus data!';
            header('Location: daftarsiswa.php');
            
        } else {
            header('Location: daftarsiswa.php');
            exit;
        }
    }
} else { 
    exit('Data Tidak Ditemukan!');
}
?>

<?=template_header('hapus')?>
<section>
    <div class="isian card">
        <div class="card-body">
            <form action="hapus.php?no=<?=$contact['no']?>" method="post">
            <h2 class="card-title judul">Hapus Data</h2>
            <div class="content hapus">
                <h2>Hapus Data No.<?=$contact['no']?></h2>
                <?php if ($msg): ?>
                <p><?=$msg?></p>
                <?php else: ?>
                <p> Apakah Anda Yakin Menghapus Data No.<?=$contact['no']?>?</p>
                <div class="yesno">
                    <a href="hapus.php?no=<?=$contact['no']?>&confirm=yes">Yes</a>
                    <a href="hapus.php?no=<?=$contact['no']?>&confirm=no">No</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?=template_footer()?>