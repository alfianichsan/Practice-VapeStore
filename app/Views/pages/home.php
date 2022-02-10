<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Carousel -->
<div class="container mt-5">
    <div class="row">
        <div class="col lg-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner mt-3">
                    <div class="carousel-item active">
                        <img src="/img/girl-vape.jpg" class="d-block w-100" alt="vaping-device">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/man-vape.jpg" class="d-block w-100" alt="man-vape">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/vaping-device.jpg" class="d-block w-100" alt="vaping-device">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- End Carousel -->

<!-- Liquid Terbaru -->
<div class="container">
    <div class="row text-center mt-5">
        <div class="col">
            <h3>Liquid Terbaru</h3>
        </div>
    </div>
    <div class="row mt-5 ">
        <div class="col lg-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/double-drip.png" class="card-img-top" alt="double-drip">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col lg-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/freeze-tea.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col lg-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/Funky_Monkey.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col lg-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/cheesecake.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Liquid Terbaru -->

<!-- Device Terbaru -->
<div class="container">
    <div class="row text-center mt-5">
        <div class="col">
            <h3>Device Terbaru</h3>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col lg-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/dovpov2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col lg-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/knight80.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col lg-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/kuy-pod.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col lg-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/vaporesso-mod.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Device Terbaru -->

<?= $this->endSection(); ?>