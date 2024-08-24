<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 btnTambahData" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa...."
                        name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-secondary" type="submit" id="tombolCari">CARI</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row ">
        <div class="col-6 ">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs): ?>
                    <li class="list-group-item shadow ">
                        <?= $mhs['nama']; ?>

                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
                            class="badge text-bg-danger float-end ms-1 btn-delete" data-id="<?= $mhs['id']; ?>">hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>"
                            class="badge text-bg-warning float-end ms-1  tampilModalUbah" data-bs-toggle="modal"
                            data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                            class="badge text-bg-primary float-end ms-1">Detail</a>
                    </li>
                <?php endforeach; ?>

            </ul>

        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- ID sesuai dengan aria-labelledby -->
                <h1 class="modal-title fs-5" id="judulmodal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan">Pilih Jurusan</label>
                        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                            <option value="Teknik Mesen">Teknik Mesen</option>
                            <option value="Teknik Kompor">Teknik Kompor</option>
                            <option value="Teknik JJ">Teknik JJ</option>
                            <option value="Teknik Ancaman">Teknik Ancaman</option>
                        </select>
                    </div>
                    <!-- Tidak ada form di sini -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <!-- Form di tutup di sini -->
                </form>
            </div>
        </div>
    </div>
</div>