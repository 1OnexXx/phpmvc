<div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="<?= BASEURL; ?>/img/woman-3789114.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="<?= BASEURL; ?>/img/woman-3789114.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="<?= BASEURL; ?>/img/woman-3789114.jpg" class="d-block w-100" alt="...">
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
        </button>
</div>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="card" style="width: 18rem;">
        <img src="<?= BASEURL; ?>/img/woman-3789114.jpg" class="card-img-top" alt="...">
        <div class="card-body">
                <h5 class="card-title"><?= $data['nama'];?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
</div>