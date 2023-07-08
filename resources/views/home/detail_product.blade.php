  @extends('home.layouts.main')
  @section('content')

 <!-- detail produk -->
    <div class="container mb-5">
        <div class="row justify-content-start detail-produk">
            <div class="mx-auto">
                @if(session('success'))
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                 @elseif(session('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session('failed') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>                  
                @endif
            </div>
            <div class="col">
                <div class="card">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('storage/product/'.$images[0]['image_name']) }}" class="d-block w-100" alt="...">
                            </div>
                            @foreach ($images as $index => $value)
                                @if($index==0)
                                continue;
                                @endif
                            <div class="carousel-item">
                                <img src="{{ asset('storage/product/'.$images[$index]['image_name']) }}" class="d-block w-100" alt="...">
                            </div>
                            @endforeach
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
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $product->title }}</h3>
                        <hr>
                        <small>✅ Stok {{ $product->stock }}</small>
                        <small><span class="badge bg-primary">{{ $product->category->category_name }}</span></small>
                        <hr>
                        <p class="text-break fs-6 fw-normal">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">
                    <div class="card-body text-center">
                        <h3><b>Rp{{ number_format($product->price,0,'.','.') }}</b></h3>
                         <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <div class="input-group mb-2">
                                <span class="input-group-text">Jumlah</span>
                                <input type="number" name="qty" class="form-control text-center" min="1" max="{{ $product->stock }}" value="1" required>
                            </div>
                            <hr>
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="max_qty" value="{{ $product->stock }}">
                            <div class="d-grid mb-2">
                                <button type="submit" class="btn btn-dark">Masukan Keranjang</button>
                            </div>
                        </form>
                        <form action="">
                            <div class="d-grid">
                                <a href="/checkout.html" class="btn btn-outline-dark">Beli</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-start detail-produk">
            <div class="col-lg-8">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab"
                            data-bs-target="#deskripsi-tab-pane" type="button" role="tab"
                            aria-controls="deskripsi-tab-pane" aria-selected="true">Deskripsi</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="deskripsi-tab-pane" role="tabpanel"
                        aria-labelledby="deskripsi-tab" tabindex="0">
                        <p class="mt-2">{{ $product->description }}</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endsection