 @extends('admin.layout.index')

 @section('content')
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Produk</h1>
     </div>

     <div class="row">
         <div class="col-md-8">
            @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3 mx-3" role="alert">
                        {{ session('success') }}
                        <a href="{{route('product.show',$product_id)}}" class="btn btn-primary btn-sm">Lihat</a>
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
                     <h6 class="m-0 font-weight-bold text-primary">Upload Produk</h6>
                 </div>
                 <div class="card-body">
                     <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                             <label>Judul</label>
                             <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" value="{{ old('title') }}">
                             @error('title')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Kategori</label>
                             <select name="category_id" class="form-control" >
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"> {{$category->category_name}} </option>    
                                @endforeach
                             </select>
                              @error('category_id')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                          <div class="form-group">
                             <label>Deskripsi Produk</label>
                             <textarea type="text" name="description" class="form-control">
                                {{ old('description') }}
                            </textarea>
                             @error('description')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Stok</label>
                             <input type="text" name="stock" class="form-control  @error('stock') is-invalid @enderror" value="{{ old('stock') }}">
                             @error('stock')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Harga</label>
                             <input type="text" name="price"  class="form-control  @error('price') is-invalid @enderror" value="{{ old('price') }}">
                             @error('price')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="input-group mb-3">
                             <div class="custom-file">
                                 <input type="file" name="images[]"  class="custom-file-input" id="inputGroupFile02" multiple />
                                 <label class="custom-file-label" for="inputGroupFile02">Pilih Gambar</label>
                             </div>
                               @error('iamges')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                                @enderror
                         </div>
                         <button class="btn btn-primary float-right" type="submit">Simpan</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection