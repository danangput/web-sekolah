<div class="container mt-5">
    <h2 class="h2 text-center">Edit</h2>
    <form action="admin.php?page=jurusan-update" method="POST" enctype="multipart/form-data">
        <div class=" mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName" name="nama_jurusan"
                value="<?= $edit['nama_jurusan'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputImage">Image</label>
            <input type="file" class="form-control-file" id="inputImage" name="gambar-jurusan"
                value="<?= $edit['gambar'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputDesc">Description</label>
            <textarea class="form-control" id="inputDesc" name="deskripsi" rows="3"
                required><?= $edit['deskripsi'] ?></textarea>
        </div>
        <input type="hidden" name="id_jurusan" value="<?= $edit['id_jurusan'] ?>">
        <button type="submit" class="btn btn-info" name="submit">Submit</button>
    </form>
</div>