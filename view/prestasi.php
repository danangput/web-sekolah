<!-- Container Utama -->
<div class="container" style="margin-top: 11.3rem; margin-bottom: 7rem">
    <h1 class="text-center mb-5 text-uppercase" style="margin-top: 100px;">Daftar Prestasi</h1>

    <!-- Baris Kartu Prestasi -->
    <div class="row">

    <?php while ($prestasi = mysqli_fetch_assoc($query)) { ?>
        <!-- Kartu 1 -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="public/img/prestasi/<?= $prestasi['gambar_prestasi'] ?>" class="card-img-top" alt="Gambar Prestasi">
                <div class="card-body">
                    <h5 class="card-title"><?= $prestasi['nama'] ?></h5>
                    <p class="card-text"><?= $prestasi['deskripsi'] ?></p>
                    <p class="card-text"><small class="text-muted"><?= $prestasi['tanggal'] ?></small></p>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>