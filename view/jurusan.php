<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <img src="public/img/jurusanbg.jpg" class="img-fluid mb-5" alt="...">
            </div>
        </div>
        <?php while ($jurusan = mysqli_fetch_assoc($query)){ ?>
        <div class="container">
            <div class="row">
                <div class="row">

                    <!-- gambar pertama -->

                    <h2 class="h2 text-uppercase mb-3"><?= $jurusan['nama_jurusan'] ?></h2>
                    <div class="grid text-center">
                        <div class="g-col-6">
                            <img src="public/img/jurusan/<?= $jurusan['gambar'] ?>" alt="" class="rounded float-start mb-5" style="width: 50%; margin-right: 3rem">
                        </div>
                        <div class="g-col-6"><br><br><br>
                            <p class="p"><?= $jurusan['deskripsi'] ?>
                            </p>
                            <a href="/web-sekolah/index.php?page=infor"><button type="button"
                                    class="btn btn-outline-primary">Lihat Detail Jurusan</button></a>
                        </div>
                    </div>

                </div>
            </div>
            <?php } ?>
</section>