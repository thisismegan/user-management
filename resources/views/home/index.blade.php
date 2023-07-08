  @extends('home.layouts.main')
  <!-- carousel-->
  @section('content')
  <section>
        <div id="carouselExample" class="carousel slide jumbotron-slide">
            <div class="container">
                <div class="carousel-inner mt-4">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/product/slide/1.png') }}" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/product/slide/2.png') }}" class="d-block w-100 rounded" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/product/slide/3.png') }}" class="d-block w-100 rounded" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- category -->
    <section>
        <div class="container mt-4">
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card-title">
                    <h4>Kategori</h4>
                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/category (1).png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/category (2).png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/category (3).png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/category (4).png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/category (5).png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/category (6).png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="line-break-product">
    <!-- Product Terlaris -->
    <section>
        <div class="container">
            <div class="card-title">
                <h4>Produk Terlaris</h4>
                <div class="row align-items-start">
                    <div class="col">
                        <a href="/detail_produk.html" style="text-decoration: none;">
                            <div class="card" style="width: 10rem;">
                                <img src="assets/img/macbook-pro.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <span class="badge bg-dark">Terlaris</span>
                                    <h6 class="card-title">Macbook Pro</h6>
                                    <h6 class="card-text"><b>Rp30.000.000</b></h6>
                                    <div class="rating">
                                        <small>⭐ 4.9 | Terjual 100+</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/macbook-air.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-dark">Terlaris</span>
                                <h6 class="card-title">Macbook Air</h6>
                                <h6 class="card-text"><b>Rp28.000.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.9 | Terjual 100+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/iphone-14-pro.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-dark">Terlaris</span>
                                <h6 class="card-title">iPhone 14 Pro</h6>
                                <h6 class="card-text"><b>Rp20.000.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 5.0 | Terjual 100+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/ipad-mini.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-dark">Terlaris</span>
                                <h6 class="card-title">iPad Mini</h6>
                                <h6 class="card-text"><b>Rp6.000.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.9 | Terjual 100+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/smart-watch.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-dark">Terlaris</span>
                                <h6 class="card-title">Smart Watch</h6>
                                <h6 class="card-text"><b>Rp7.000.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.9 | Terjual 100+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/img/imac.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-dark">Terlaris</span>
                                <h6 class="card-title">iMac</h6>
                                <h6 class="card-text"><b>Rp14.000.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.9 | Terjual 100+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="line-break-product">
    <!-- product pilihan -->
    <section>
        <div class="container">
            <div class="card-title">
                <h4>Produk Pilihan</h4>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="card card-product" style="width: 10rem;">
                            <img src="assets/img/airpods.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">AirPods Max</h6>
                                <h6 class="card-text"><b>Rp9.000.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.8 | Terjual 500+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product" style="width: 10rem;">
                            <img src="assets/img/AirTag-Loop.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">AirTag Loop</h6>
                                <h6 class="card-text"><b>Rp490.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.9 | Terjual 900+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product" style="width: 10rem;">
                            <img src="assets/img/leather-sleeve.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Leather Sleeve for 10,5inci iPad Pro</h6>
                                <h6 class="card-text"><b>Rp600.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 5.0 | Terjual 200+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product" style="width: 10rem;">
                            <img src="assets/img/mac-studio.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Mac Studio</h6>
                                <h6 class="card-text"><b>Rp33.000.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.9 | Terjual 20</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product" style="width: 10rem;">
                            <img src="assets/img/air-tag-pack.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">AirTag (4 Pack)</h6>
                                <h6 class="card-text"><b>Rp1.400.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.9 | Terjual 100+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-product" style="width: 10rem;">
                            <img src="assets/img/iPad-gen-5.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">iPad Air 5th Gen 10.9 inci</h6>
                                <h6 class="card-text"><b>Rp10.000.000</b></h6>
                                <div class="rating">
                                    <small>⭐ 4.9 | Terjual 200+</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center"><button class="btn btn-outline-dark">Muat lebih banyak</button></div>
                <hr>
            </div>
        </div>
    </section>
  @endsection