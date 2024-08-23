<div class="container mt-5">
    <h2 class="h2 text-center">Tambah</h2>
    <form action="../../../controller/add_artikel.php" method="POST">
  <div class="mb-3">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="inputTitle">
  </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label">Date</label><br>
    <input type="date" id="inputDate">
  </div>
  <div class="mb-3">
    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" id="inputImage">
  </div>
  <div class="mb-3">
    <label for="inputDesc">Description</label>
    <textarea class="form-control" id="inputDesc" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btn-info" name="submit">Submit</button>
</form>
  </div>