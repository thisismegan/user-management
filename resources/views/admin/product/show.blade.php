 @extends('admin.layout.index')

 @section('content')
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="row">
         <div class="col-md-4">
             <div class="card card shadow mb-4">
                <div class="card-body">
                    <div class="card-title">Detail Produk</div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('storage/product/'.$images[0]['image_name']) }}" alt="First slide">
                            </div>
                            <?php foreach($images as $index => $val): ?>
                            <?php if($index==0){
                                continue;
                            } ?>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('storage/product/'.$images[$index]['image_name']) }}" alt="First slide">
                                </div>
                            <?php endforeach ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
             </div>
         </div>
         <div class="col-md-8">
             <div class="card card shadow mb-4">
                 <div class="card-body">
                    <div class="card-titel">{{ $product->title }}</div>
                    <div class="card-titel"><b>Rp{{ number_format($product->price,0,',','.') }}</b></div>
                    <span class="badge badge-primary"> {{$product->category_name}} </span>
                    <p>Stok ✅: {{ $product->stock }}</p>
                    <p> {{$product->description}} </p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection