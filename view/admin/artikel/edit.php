<?php
  include "controller/db_connect.php";

  $id = $_GET['id_artikel'];
  $query = "SELECT * FROM artikel WHERE id_artikel = $id";
  $edit = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>

<div class="container mt-5">
    <h2 class="h2 text-center">Edit</h2>
    <form action="controller/artikel/update_artikel.php" method="POST">
  <div class="mb-3">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="inputTitle" name="judul_artikel" value="<?= $edit['judul_artikel'] ?>">
  </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label">Date</label><br>
    <input type="date" id="inputDate" name="tanggal" value="<?= $edit['tanggal'] ?>">
  </div>
  <div class="mb-3">
    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" id="inputImage" name="gambar.jpg" value="<?= $edit['gambar.jpg'] ?>">
  </div>
  <div class="mb-3">
    <label for="inputDesc">Description</label>
    <textarea class="form-control" id="inputDesc" name="deskripsi" rows="3" required><?= $edit['deskripsi'] ?></textarea>
  </div>
  <input type="hidden" name="id_artikel" value="<?= $edit['id_artikel'] ?>">
  <button type="submit" class="btn btn-info" name="submit">Submit</button>
</form>
  </div>