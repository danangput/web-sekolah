<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Artikel</h1>
    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, aliquam?</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Data Article</h6>
        </div>
        <div class="card-body">
            <div class="my-2">
                <a href="/web-sekolah/admin.php?page=artikel-create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($artikel = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $artikel['judul_artikel'] ?></td>
                                <td><img src="public/img/artikel/<?= $artikel['gambar'] ?>" alt="" class="img-fluid" style="width: 200px; height: 200px"></td>
                                <td><a href="admin.php?id_artikel=<?= $artikel['id_artikel'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapusnya ??')">Hapus</a> | <a href="/web-sekolah/admin.php?page=artikel-edit&id_artikel=<?= $artikel['id_artikel'] ?>" class="btn btn-warning">Edit</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->