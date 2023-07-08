 @extends('admin.layout.index')

 @section('content')
 <div class="container-fluid">
     <div class="row">
         <div class="col-md-8">
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
                     <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
                 </div>
                 <div class="card-body">
                     <form method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         <div class="form-group">
                             <label>Judul</label>
                             <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" 
                             value="{{ $product->title }}">
                             @error('title')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Kategori</label>
                             <select name="category_id" class="form-control">
                                 @foreach ($categories as $category)
                                 <option @if($product->category_id == $category->id) selected @endif value="{{ $category->id }}"> {{$category->category_name}} </option>
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
                             <textarea type="text" name="description" class="form-control  @error('description') is-invalid @enderror">
                             {{ $product->description }}
                             </textarea>
                             @error('description')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Stok</label>
                             <input type="text" name="stock" class="form-control  @error('stock') is-invalid @enderror" 
                             value="{{ $product->stock }}">
                             @error('stock')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Harga</label>
                             <input type="text" name="price" class="form-control  @error('price') is-invalid @enderror" 
                             value="{{ $product->price }}">
                             @error('price')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="input-group mb-3">
                             <div class="custom-file">
                                 <input type="file" name="images[]"  class="custom-file-input" id="inputGroupFile02" multiple />
                                 <label class="custom-file-label" for="inputGroupFile02">Tambah Gambar</label>
                             </div>
                         </div>
                         <button class="btn btn-primary float-right" type="submit">Simpan</button>
                     </form>
                 </div>
             </div>
         </div>
         <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                     <table class="table table-bordered">
                         <thead>
                         </thead>
                         <tbody>
                            <?php $i=1; foreach($images as $image): ?>
                            <tr>
                                 <th scope="row"><?= $i++ ?></th>
                                 <td>
                                    <img src="{{ asset('storage/product/'.$image->image_name) }}" width="70px" alt="">
                                 </td>
                                 <?php if(count($images) <= 1): ?>
                                    <td >
                                         <button type="submit" class="btn btn-danger btn-sm" href=""><i class="fas fa-ban"></i></button>
                                    </td>
                                 <?php else: ?>
                                <td>
                                    <form action="{{ route('delete-image') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                                        <button type="submit" onclick="return confirm('Anda yakin?')" class="btn btn-danger btn-sm" href=""><i class="fas fa-trash"></i></button>
                                    </form>
                                 </td>
                                 <?php endif ?>
                             </tr>
                            <?php endforeach ?>
                         </tbody>
                     </table>
                </div>
            </div>
         </div>
     </div>
 </div>
 @endsection