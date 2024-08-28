<!-- Container Utama -->
<div class="container mt-5">
    <!-- Artikel 1 -->
    <article class="mb-5">
        <header class="article-header mb-3">
            <img src="public/img/artikel/<?= $detail_artikel['gambar'] ?>" class="img-fluid" alt="Gambar Artikel">
            <h1 class="mt-3"><?= $detail_artikel['judul_artikel'] ?></h1>
            <p class="text-muted"><?= $detail_artikel['tanggal'] ?></p>
        </header>

        <div class="article-content">
            <p style="text-align: justify;"><?= $detail_artikel['deskripsi'] ?> </p>
        </div>
    </article>
</div>