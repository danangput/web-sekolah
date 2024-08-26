<div class="container mt-5">
  <h2 class="h2 text-center">Tambah</h2>
  <form action="controller/guru/add_guru.php" method="POST">
    <div class="mb-3">
      <label for="inputTitle" class="form-label">Name</label>
      <input type="text" class="form-control" id="inputTitle" name="nama">
    </div>
    <div class="mb-3">
      <label for="inputAddress" class="form-label">Address</label><br>
      <input type="text" id="inputAddress" name="alamat">
    </div>
    <div class="mb-3">
      <label for="inputNotelp">No Telp</label>
      <input type="tel" class="form-control-file" id="inputNotelp" name="no_telp">
    </div>
    <div class="mb-3">
      <label for="inputImage">Image</label>
      <input type="file" class="form-control-file" id="inputImage" name="image">
    </div>
    <button type="submit" class="btn btn-info" name="submit">Submit</button>
  </form>
</div>