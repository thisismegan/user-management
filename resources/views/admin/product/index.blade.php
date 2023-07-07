 @extends('admin.layout.index')

 @section('content')
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="row">
         <div class="col-md-12">
             @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3 mx-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif(session('failed'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3 mx-3" role="alert">
                        {{ session('failed') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif
             <div class="card card shadow mb-4">
                 <div class="card-header py-3">
                     <h6 class="font-weight-bold text-primary">List Produk</h6>
                     <a class="btn btn-primary float-right" href="{{ route('product.create') }}">Tambah Produk</a>
                 </div>
                 <div class="card-body">
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Judul</th>
                                 <th scope="col">Kategori</th>
                                 <th scope="col">Stok</th>
                                 <th scope="col">Harga</th>
                                 <th scope="col">Opsi</th>
                             </tr>
                         </thead>
                         <tbody>
                        @foreach ($products as $product)
                            <tr>
                                 <th scope="row">1</th>
                                 <td>{{ $product->title }}</td>
                                 <td>{{ $product->category->category_name }}</td>
                                 <td> {{$product->stock}} </td>
                                 <td> {{$product->price}} </td>
                                 <td>
                                  <div class="row">
                                      <a class="btn btn-primary btn-sm mx-2" href="{{ route('product.show',$product->id)}}"><i class="fas fa-list"></i></a>
                                    <a class="btn btn-warning btn-sm mx-2" href="{{ route('product.edit',$product->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                    <form class="mr-2" method="POST" action="{{ route('delete-product') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <button class="btn btn-danger btn-sm mx-2" onclick="return confirm('anda yakin?')" href=""><i class="fas fa-trash"></i></button>
                                    </form>
                                  </div>
                                 </td>
                             </tr>
                        @endforeach    
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection