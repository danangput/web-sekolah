<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Pesan Client</h1>
    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, aliquam?</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Data Pesan Client</h6>
        </div>
        <div class="card-body">
            <div class="my-2">
                <!-- <a href="/web-sekolah/admin.php?page=guru-create" class="btn btn-primary"><i class="fas fa-plus"></i>
                    Tambah</a> -->
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($client = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $client['username'] ?></td>
                                <td><?= $client['email'] ?></td>
                                <td><?= $client['pesan'] ?></td>
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