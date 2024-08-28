<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Guru</h1>
    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, aliquam?</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Data Guru</h6>
        </div>
        <div class="card-body">
            <div class="my-2">
                <a href="/web-sekolah/admin.php?page=guru-create" class="btn btn-primary"><i class="fas fa-plus"></i>
                    Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <!-- <th>Address</th> -->
                            <th>No Telp</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($guru = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $guru['nama_guru'] ?></td>
                                <td><?= $guru['no_telp'] ?></td>
                                <td><img src="public/img/guru/<?= $guru['gambar_guru'] ?>" alt="" class="img-fluid" style="width: 200px; height: 200px"></td>
                                <td><a href="?page=guru-destroy&id_guru=<?= $guru['id_guru'] ?>"
                                        class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapusnya ??')">Hapus</a> | <a class="btn btn-warning"
                                        href="/web-sekolah/admin.php?page=guru-edit&id_guru= <?= $guru['id_guru'] ?>">Edit</a>
                                </td>
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