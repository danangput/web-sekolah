<div class="container mt-5">
    <h2 class="h2 text-center">Edit</h2>
    <form action="?page=prestasi-update" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName" name="nama" value="<?= $edit['nama'] ?>">
        </div>
        <textarea id="summernote" name="deskripsi"></textarea>
    <script>
      $(document).ready(function() {
        $('#summernote').summernote();
      });
    </script>
        <div class="mb-3">
            <label for="inputImage">Image</label>
            <input type="file" class="form-control-file" id="inputImage" name="gambar-prestasi"
                value="<?= $edit['gambar_prestasi'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputDate" class="form-label">Date</label><br>
            <input type="date" id="inputDate" name="tanggal" value="<?= $edit['tanggal'] ?>">
        </div>
        <input type="hidden" name="id_prestasi" value="<?= $edit['id_prestasi'] ?>">
        <button type="submit" class="btn btn-info" name="submit">Submit</button>
    </form>
</div>