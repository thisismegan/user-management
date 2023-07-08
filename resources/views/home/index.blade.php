  @extends('home.layouts.main')
  @section('content')

  @if(request('search'))
 <section>
         <div class="container" style="margin-top: 100px">
            <h4>Pencarian untuk produk: {{ request('search') }}</h4>
            <div class="row">
                <?php foreach ($products->get() as $product) : ?>
                    <div class="col-lg-2 col-md-6 col-sm-2 mb-3">
                        <a href="{{ route('detail-product',$product->id) }}" style="text-decoration:none">
                            <div class="card card-product" style="width: 10rem;">
                                <img src="{{ asset('storage/product/'.$product->image[0]['image_name']) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">{{ substr($product->title,0, 30) }}</h6>
                                    <h6 class="card-text"><b>Rp{{ number_format($product->price,0,',','.') }}</b></h6>
                                    <div class="rating">
                                        <small>⭐ 4.8 | Terjual 500+</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-4 text-center"><button class="btn btn-outline-dark">Muat lebih banyak</button></div>
        </div>
    </section>

  @else
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
                    @foreach ($categories as $category)
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="{{ asset('storage/category/'.$category->category_image) }}" class="card-img-top" alt="...">
                        </div>
                    </div>    
                    @endforeach
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
                                <img src="{{ asset('storage/product/sample/product_terlaris1.jpg') }}" class="card-img-top" alt="...">
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
                            <img src="{{ asset('storage/product/sample/product_terlaris2.png') }}   " class="card-img-top" alt="...">
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
                            <img src="{{ asset('storage/product/sample/product_terlaris3.png') }}" class="card-img-top" alt="...">
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
                            <img src="{{ asset('storage/product/sample/product_terlaris4.png') }}" class="card-img-top" alt="...">
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
                            <img src="{{ asset('storage/product/sample/product_terlaris5.jpg') }}" class="card-img-top" alt="...">
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
                            <img src="{{ asset('storage/product/sample/product_terlaris6.jpg') }}" class="card-img-top" alt="...">
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
         <div class="container mt-4">
            <h4>Produk Pilihan</h4>
            <div class="row">
                <?php foreach ($products->get() as $product) : ?>
                    <div class="col-lg-2 col-md-6 col-sm-2 mb-3">
                        <a href="{{ route('detail-product',$product->id) }}" style="text-decoration:none">
                            <div class="card card-product" style="width: 10rem;">
                                <img src="{{ asset('storage/product/'.$product->image[0]['image_name']) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">{{ substr($product->title,0, 30) }}</h6>
                                    <h6 class="card-text"><b>Rp{{ number_format($product->price,0,',','.') }}</b></h6>
                                    <div class="rating">
                                        <small>⭐ 4.8 | Terjual 500+</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-4 text-center"><button class="btn btn-outline-dark">Muat lebih banyak</button></div>
        </div>
    </section>
    @endif
  @endsection