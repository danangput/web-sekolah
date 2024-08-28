<div class="container p-5 rounded shadow mb-3" style="margin-top: 5rem; letter-spacing: 1.5px; background-color: rgba(128, 128, 128, 0.5)
">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="mb-3" style="text-shadow: 2px 2px 1px rgba(255, 255, 255, 1); font-size: 3rem">STRUKTUR GURU</h3>
        </div>
    </div>
    <?php while ($guru = mysqli_fetch_assoc($query)){ ?>
    <div class="container">
        <div class="row mb-3 d-flex justify-content-center align-items-center">
            <div class="col-md-3">
                <img src="public/img/guru/<?= $guru['gambar_guru'] ?>" alt="" srcset="" class="img-fluid rounded-circle shadow" width="250">
            </div>
            <div class="col-md-9">
                <h5 class="text-uppercase">Nama : <?= $guru['nama_guru'] ?></h5>
                <h6 class="text-uppercase">Alamat : <?= $guru['alamat'] ?></h6>
                <h6 class="text-uppercase">No Tlpn : <?= $guru['no_telp'] ?></h6>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque a, dolor minus facere maxime nam quae omnis id dolorum ea, dolorem maiores quidem accusamus. Quam in consequuntur suscipit quae quod.</p>
            </div>
        </div>
<?php } ?>
    </div>
</div>