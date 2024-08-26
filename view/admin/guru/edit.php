<div class="container mt-5">
    <h2 class="h2 text-center">Edit</h2>
    <form action="controller/guru/update_guru.php" method="POST">
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputTitle" name="nama_guru" value="<?= $edit['nama_guru'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address</label><br>
            <input type="text" id="inputAddress" class="form-control" name="alamat" value="<?= $edit['alamat'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputNotelp">No Telp</label>
            <input type="tel" class="form-control" id="inputNotelp" name="no_telp" value="<?= $edit['no_telp'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputImage">Image</label>
            <input type="file" class="form-control-file" id="inputImage" name="gambar">
        </div>
        <input type="hidden" name="id_guru" value="<?=$edit['id_guru']?>">
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>