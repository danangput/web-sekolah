<!-- Container Utama -->
<br><br><br><br>
<div class="container mt-5" style="letter-spacing: 1.5px">
    <!-- Artikel 1 -->
    <article class="mb-5">
        <header class="article-header mb-3">
        <img src="public/img/jurusan/<?= $jurusan['gambar'] ?>"class="img-fluid position-relative top-0 start-50 translate-middle-x" alt="Gambar Artikel"><br><br>
            <h1 class="mt-3 text-center"><?= $jurusan['nama_jurusan'] ?></h1><br><br>
        </header>

        <div class="article-content">
            <p style="text-align: justify;"><?= $jurusan['deskripsi'] ?>.</p>
        </div>
    </article>
</div>