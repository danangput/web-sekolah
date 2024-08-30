<div class="container mt-5">
  <h2 class="h2 text-center">Tambah</h2>
  <form action="?page=artikel-store" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="inputTitle" class="form-label">Title</label>
      <input type="text" class="form-control" id="inputTitle" name="judul_artikel">
    </div>
    <div class="mb-3">
      <label for="inputDate" class="form-label">Date</label><br>
      <input type="date" id="inputDate" name="tanggal">
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