<div class="container mt-5">
    <h2 class="h2 text-center">Tambah</h2>
    <form action="?page=jurusan-store" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" name="nama_jurusan">
  </div>
  <div class="mb-3">
    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" id="inputImage" name="gambar" accept="image/*">
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