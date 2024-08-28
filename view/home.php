<!-- start header -->
<section class="header">
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="public/img/Visi.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height: 700px;">
        <div class="carousel-caption d-none d-md-block text-white">
          <h5 class="text-uppercase" style="text-shadow: 1px 1px 1px aqua;">Visi Sekolah</h5>
          <p style="text-shadow: 1px 1px 1px red;">Tetap Maju Walau Banyak Yang Sudah Mundur, Tetap Mundur Walau Sudah
            Banyak Yang Maju</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="public/img/Misi.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height: 700px;">
        <div class="carousel-caption d-none d-md-block text-white">
          <h5 class="text-uppercase" style="text-shadow: 1px 1px 1px aqua;">Misi Sekolah</h5>
          <p style="text-shadow: 1px 1px 1px red;">Mencerdaskan, Membimbing Serta Membantu Antar Sesama Warga Sekolah
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="public/img/Harapan.jpg" class="d-block w-100 object-fit-cover" alt="..." style="height: 700px;">
        <div class="carousel-caption d-none d-md-block text-white">
          <h5 class="text-uppercase" style="text-shadow: 1px 1px 1px aqua;">Harapan Sekolah</h5>
          <p style="text-shadow: 1px 1px 1px red;">Menjadikan Anak Berfikir Secara Logic Dan Menjadi Lulusan yang Mampu
            Berfikir Kritis</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!-- end header -->
<!-- start kartu -->
<section class="kartu">
  <!-- Start container -->
  <div class="container mb-2 mt-2">
    <h1 class="text-center mb-5">JURUSAN</h1>
    <!-- Start row -->
    <div class="row">
      <!-- Start col ke 1 -->
      <?php while ($home = mysqli_fetch_assoc($home_jurusan)) { ?>
        <div class="col-4 d-flex justify-content-center">
          <div class="card shadow" style="width: 18rem">
            <img src="public/img/jurusan/" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">.</h5>
              <p class="card-text text-truncate">
                .
              </p>
              <a href="/web-sekolah/index.php?page=infor" class="btn btn-primary">Baca Selanjutnya
                <i class="bi bi-box-arrow-right"></i>
              </a>
            </div>
          </div>
          <!-- End col ke 1 -->
        </div>
      <?php } ?>

      <!-- Start col ke 2 -->
      <div class="col-4 d-flex justify-content-center">
        <div class="card shadow" style="width: 18rem">
          <img src="public/img/ml.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Mesin Learning</h5>
            <p class="card-text text-truncate">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="/web-sekolah/index.php?page=machine" class="btn btn-primary">Baca selanjutnya
              <i class="bi bi-box-arrow-right"></i>
            </a>
          </div>
        </div>
        <!-- End col ke 2 -->
      </div>
      <!-- Start col ke 3 -->
      <div class="col-4 d-flex justify-content-center">
        <div class="card shadow" style="width: 18rem">
          <img src="public/img/analis.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Data analis</h5>
            <p class="card-text text-truncate">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="/web-sekolah/index.php?page=analis" class="btn btn-primary">Baca Selanjutnya
              <i class="bi bi-box-arrow-right"></i>
            </a>
          </div>
        </div>
        <!-- End col ke 3 -->
      </div>
      <!-- End row -->
    </div>
    <!-- End container -->
  </div>
</section>
<!-- end kartu -->
<div class="container rounded my-3">
  <div class="text-center">
    <h1 class="text-uppercase">Tentang Sekolah</h1>
  </div>
  <div class="row my-2 align-items-center">
    <div class="col-3">
      <img class="img-fluid rounded-circle" src="public/img/kp.JPG" alt="" srcset="" style="height: 250px;">
    </div>
    <div class="col-9">
      <h2> KEPALA SEKOLAH</h2>
      <div class="font-monospace">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis beatae fugiat exercitationem nihil voluptatum
          expedita praesentium pariatur eligendi placeat velit. Error, ut eveniet? Harum iusto officia ad aliquam saepe
          fugiat!</p>
      </div>
    </div>
  </div>
  <div class="row my-2 align-items-center">
    <div class="col-9 text-end">
      <h2> GURU SEKOLAH</h2>
      <div class="font-monospace">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis beatae fugiat exercitationem nihil voluptatum
          expedita praesentium pariatur eligendi placeat velit. Error, ut eveniet? Harum iusto officia ad aliquam saepe
          fugiat!</p>
      </div>
    </div>
    <div class="col-3">
      <img class="img-fluid rounded-circle" src="public/img/guruN.jpg" alt="" srcset="" style="height: 250px;">
    </div>
  </div>
  <div class="row my-2 align-items-center">
    <div class="col-3">
      <img class="img-fluid rounded-circle" src="public/img/almuni.jpg" alt="" srcset="" style="height: 250px;">
    </div>
    <div class="col-9">
      <h2> ALUMNI</h2>
      <div class="font-monospace">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis beatae fugiat exercitationem nihil voluptatum
          expedita praesentium pariatur eligendi placeat velit. Error, ut eveniet? Harum iusto officia ad aliquam saepe
          fugiat!</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 mb-3 mt-2">
      <a href="index.php?page=guru" class="btn btn-primary w-100 text-center shadow">Baca Selengkapnya</a>
    </div>
  </div>
</div>
<!-- feature lainya ada di sini -->

<!-- end feature -->
<section>
  <div class="container mb-3">
    <div class="row gx-5">
      <div class="col-6 bg-info-subtle p-5 rounded-3">
        <h2 class="h2 mb-5 mt-2 text-center">Contact</h2>
        <h5 class="h5"><i class="bi bi-house-door"></i>
          Alamat</h5>
        <p class="p">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126515.4428458862!2d110.2807799073777!3d-7.7251821830264795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5fe6f3858fef%3A0x68b4c276c78b244c!2sSTM%20Tadika%20Mesra!5e0!3m2!1sid!2sid!4v1723535326805!5m2!1sid!2sid"
            width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
        <u>Jln.Hayam Wuruk Km 13, Sukabangga, Kecamatan Prokontra, Kabupaten Kidul Lepen, Provinsi Mabur Duwur,
          Indonesia</u>
        <h5 class="h5"><i class="bi bi-envelope-at-fill"></i>
          Email</h5>
        <p class="p">
          SekolahTadikaMesra@gmail.com</p>
        <h5 class="h5"><i class="bi bi-telephone"></i>
          No Telp</h5>
        <p class="p">
          <a href="https://wa.me/628521234567">0866464633737</a>

        </p>
      </div>
      <div class="col-6 bg-warning-subtle rounded-3 p-5">
        <h2 class="h2 mb-5 mt-2 text-center">Message</h2>
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label h5">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              style="width: 50%;">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label h5">Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" style="width: 50%;">
          </div>
          <!-- Text Box -->
          <div class="mb-3">
            <h5 class="h5">Pesan</h5>
            <textarea rows="5" cols="35" name="pesan" id="pesan" style="border-radius: 10px; padding: 15px;"></textarea>
          </div>
          <!-- End Text Box -->
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Save Changes</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>