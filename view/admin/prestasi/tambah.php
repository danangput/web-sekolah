<div class="container mt-5">
    <h2 class="h2 text-center">Tambah</h2>
    <form action="?page=prestasi-store" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName" name="nama">
        </div>
        <textarea id="summernote" name="deskripsi"></textarea>
    <script>
      $(document).ready(function() {
        $('#summernote').summernote();
      });
    </script>
        <div class="mb-3">
            <label for="inputImage">Image</label>
            <input type="file" class="form-control-file" id="inputImage" name="gambar_prestasi" accept="image/*">
        </div>
        <div class="mb-3">
            <label for="inputDate" class="form-label">Date</label><br>
            <input type="date" id="inputDate" name="tanggal">
        </div>
        <button type="submit" class="btn btn-info" name="submit">Submit</button>
    </form>
</div>