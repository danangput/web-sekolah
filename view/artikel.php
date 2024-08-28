<!-- Container Utama -->
<div class="container mt-5">
    <h1 class="text-center mb-4 text-uppercase" style="margin-top: 100px;">Artikel Terbaru</h1>

    <!-- Artikel -->
    <?php while ($artikel = mysqli_fetch_assoc($query)){ ?>
    <div class="row mt-5">
        <!-- Gambar -->
        <div class="col-md-3">
            <img src="public/img/artikel/<?= $artikel['gambar'] ?>" class="img-fluid rounded" alt="Gambar Artikel">
        </div>

        <!-- Teks Artikel -->
        <div class="col-md-9">
            
            <h2><?= $artikel['judul_artikel'] ?></h2>
            <p class="text-muted"><?php
            $date = new DateTime($artikel['tanggal']);
            $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
            echo $formatter->format($date);
            ?></p>
            <p> <?= $artikel['deskripsi'] ?> <a href="http://localhost/web-sekolah/index.php?page=show_artikel&id_artikel=<?= $artikel ['id_artikel'] ?>">Baca Selengkapnya..</a></p>
        </div>
    </div>

<?php } ?>
    <div class="btn-toolbar mb-4 d-flex justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group me-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-outline-secondary">1</button>
    <button type="button" class="btn btn-outline-secondary">2</button>
    <button type="button" class="btn btn-outline-secondary">3</button>
    <button type="button" class="btn btn-outline-secondary">4</button>
  </div>
    </div>
</div>