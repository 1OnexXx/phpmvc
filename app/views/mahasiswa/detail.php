<div class="container mt-5">

<div class="card" style="width: 18rem;">
  <img src="" class="card-img-top" alt="Mermaid">
  <div class="card-body">
    <h5 class="card-title"><?= $data['mhs']['nama'] ;?></h5>
    <p class="card-text"> <?= $data['mhs']['nrp'];?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $data['mhs']['email'];?></li>
    <li class="list-group-item"> <?= $data['mhs']['jurusan'];?></li>
  </ul>
  <div class="card-body">
    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>

  </div>
</div>


</div>