  @extends('home.layouts.main')
  @section('content')

  <section>
      <div class="container">
          <h4>Produk Pilihan</h4>
          <div class="row">
              <?php foreach ($productSearch as $product) : ?>
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
  @endsection