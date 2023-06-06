<div class="">

    <div class="row">
        <div class="col-lg-12">
            <?= Flasher::flash(); ?>
        </div>
    </div>


        <div class="text-left">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-success mb-2 mt-3 tambah-data-mhs" data-bs-toggle="modal" data-bs-target="#tambah-data">
              Tambah Data
            </button>
        </div>

        <!-- find keyword -->
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan keyword" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                      <button class="btn btn-outline-dark" type="submit" id="tombol-cari">Cari</button>
                    </div>
                </div>
            </form>

            <h5 style="text-align:center;" class="mb-4">Daftar Mahasiswa</h5>

        <ul class="list-group list-group-flush">
            <?php foreach($data['mhs'] as $mhs) : ?>
          <li class="list-group-item">
              <?= $mhs['nama']; ?>
              <div class="float-end">
                  <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ?');">Hapus</a>
                  <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-warning btn-sm ubah-data-mhs" data-bs-toggle="modal" data-bs-target="#tambah-data" data-id="<?= $mhs['id']; ?>" >Ubah</a>
                  <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-info btn-sm ">Details</a>
              </div>
          </li>
            <?php endforeach; ?>

        </ul>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="tambah-data-judul" aria-hidden="true" data-bs-backdrop='static' data-keyboard = "false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal-judul">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="window.location.reload()"></button>
      </div>
      <div class="modal-body">

          <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post" autocomplete="off">
              <!-- Input hidden id diperlukan utk method update, pada kali ini dikirim dengan menggunakan ajax -->
             <input type="hidden" name="id" id="id" value="id">
             <div class="mb-3 form-group">
                 <label for="nama" class="form-label">Nama :</label>
                 <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" required>
            </div>
            <div class="mb-3 form-group">
                <label for="nrp" class="form-label">NRP :</label>
                <input type="text" class="form-control" id="nrp" aria-describedby="emailHelp" name="nrp" required>
           </div>
           <div class="mb-3 form-group">
               <label for="email" class="form-label">Email address :</label>
               <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
          </div>
          <div class="mb-3 form-group">
              <label class="my-1 mr-2" for="jurusan">Jurusan</label>
              <select class="custom-select p-1" id="jurusan" name="jurusan" required>
                  <option selected value="teknik geologi">Teknik Geologi</option>
                  <option value="teknik informatika">Teknik Informatika</option>
                  <option value="teknik mesin">Teknik Mesin</option>
                  <option value="pendidikan dokter">Pendidikan Dokter</option>
                  <option value="pendidikan bahasa inggris">Pendidikan Bahasa Inggris</option>
              </select>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.reload()">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
        </div>

    </div>
  </div>
</div>
