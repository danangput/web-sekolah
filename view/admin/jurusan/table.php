  <!-- Begin Page Content -->
  <div class="container-fluid mt-5">
  
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Jurusan</h1>
  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, aliquam?</p>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-center">Data Jurusan</h6>
      </div>
      <div class="card-body">
          <div class="my-2">
              <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
          </div>
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Gambar</th>
                          <th>Description</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                        $i = 1;
                        while ($jurusan = mysqli_fetch_assoc($query)) {
                    ?>
                      <tr>
                          <td><?= $i++ ?></td>
                          <td><?= $jurusan['nama_jurusan'] ?>System Architect</td>
                          <td><?= $jurusan['gambar'] ?>Edinburgh</td>
                          <td><?= $jurusan['deskripsi'] ?>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, temporibus.</td>
                          <td><a href="" class="btn btn-danger">Hapus</a> | <a href="" class="btn btn-warning">Edit</a></td>
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
