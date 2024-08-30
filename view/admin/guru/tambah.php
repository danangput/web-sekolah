<div class="container mt-5">
  <h2 class="h2 text-center">Tambah</h2>
  <form action="?page=guru-store" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="inputTitle" class="form-label">Name</label>
      <input type="text" class="form-control" id="inputTitle" name="nama">
    </div>
    <div class="mb-3">
      <label for="inputTitle" class="form-label">Jabatan</label>
      <input type="text" class="form-control" id="inputTitle" name="jabatan">
    </div>

    <div class="mb-3">
      <label for="inputAddress" class="form-label">Address</label>
      <textarea class="form-control" id="inputAddress" rows="3" required name="alamat"></textarea>
    </div>
    <div class="mb-3">
      <label for="inputNotelp">No Telp</label>
      <input type="tel" class="form-control-file" id="inputNotelp" name="no_telp">
    </div>
    <div class="mb-3">
      <label for="inputImage">Image</label>
      <input type="file" class="form-control-file" id="inputImage" name="gambar_guru" accept="image/*">
    </div>
    <textarea id="summernote" name="deskripsi"></textarea>
    <script>
      $(document).ready(function() {
        $('#summernote').summernote();
      });
    </script>

    <button type="submit" class="btn btn-info" name="submit">Submit</button>
  </form>
</div>