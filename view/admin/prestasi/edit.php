<div class="container mt-5">
    <h2 class="h2 text-center">Edit</h2>
    <form action="controller/prestasi/update_prestasi.php" method="POST">
  <div class="mb-3">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" name="nama" value="<?= $edit['nama'] ?>">
  </div>
  <div class="mb-3">
    <label for="inputDesc">Description</label>
    <textarea class="form-control" id="inputDesc" rows="3" required name="deskripsi"><?= $edit['deskripsi'] ?></textarea>
  </div>
  <div class="mb-3">
    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" id="inputImage" name="gambar_prestasi" value="<?= $edit['gambar_prestasi'] ?>">
  </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label">Date</label><br>
    <input type="date" id="inputDate" name="tanggal" value="<?= $edit['tanggal'] ?>">
  </div>
  <input type="hidden" name="id_prestasi" value="<?= $edit['id_prestasi'] ?>">
  <button type="submit" class="btn btn-info" name="submit">Submit</button>
</form>
  </div>