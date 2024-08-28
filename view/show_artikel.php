<!-- Container Utama -->
<div class="container mt-5">
    <!-- Artikel 1 -->
    <article class="mb-5">
        <header class="article-header mb-3">
            <img src="public/img/artikel/<?= $detail_artikel['gambar'] ?>" class="img-fluid" alt="Gambar Artikel">
            <h1 class="mt-3"><?= $detail_artikel['judul_artikel'] ?></h1>
            <p class="text-muted"><?php
            $date = new DateTime($detail_artikel['tanggal']);
            $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
            echo $formatter->format($date);
            ?></p>
        </header>
        <div class="article-content">
            <p class="" style="text-align: justify"><?= $detail_artikel['deskripsi'] ?> </p>
        </div>
    </article>
</div>