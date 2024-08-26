<div class="container mt-5">
    <h2 class="h2 text-center">Tambah</h2>
    <form action="controller/prestasi/add_prestasi.php" method="POST">
  <div class="mb-3">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" name="nama">
  </div>
  <div class="mb-3">
    <label for="inputDesc">Description</label>
    <textarea class="form-control" id="inputDesc" rows="3" required name="deskripsi"></textarea>
  </div>
  <div class="mb-3">
    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" id="inputImage" name="gambar_prestasi">
  </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label">Date</label><br>
    <input type="date" id="inputDate" name="tanggal">
  </div>
  <button type="submit" class="btn btn-info" name="submit">Submit</button>
</form>
  </div>