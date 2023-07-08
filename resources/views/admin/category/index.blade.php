 @extends('admin.layout.index')

 @section('content')
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="row">
         <div class="col-md-6">
             @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif(session('failed'))
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        {{ session('failed') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif
             <div class="card card shadow mb-4">
                 <div class="card-body">
                    <div class="card-title">Daftar Kategori</div>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Nama Kategori</th>
                                 <th scope="col">Gambar</th>
                                 <th scope="col">Opsi</th>
                             </tr>
                         </thead>
                         <tbody>    
                        <?php $i=1;  foreach($category as $category): ?>
                            <tr>
                                 <th scope="row">{{ $i++ }}</th>
                                 <td>{{ $category->category_name }}</td>
                                 <td>
                                    <img src="{{ asset('storage/category/'.$category->category_image) }}" width="60px" alt="">
                                 </td>
                                 <td>
                                  <div class="row">
                                    <button class="btn btn-warning btn-sm mx-2"  data-toggle="modal" data-target="#edit{{ $category->id }}"><i class="fas fa-pencil-alt"></i></button>
                                    <form class="mr-2" method="POST" action="{{ route('delete-category') }}">
                                        @csrf
                                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm mx-2" onclick="return confirm('anda yakin?')" href=""><i class="fas fa-trash"></i></button>
                                    </form>
                                  </div>
                                 </td>
                             </tr>
                        <?php endforeach ?>   
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
         <div class="col-md-6">
             <div class="card card shadow mb-4">
                 <div class="card-body">
                    <div class="card-title"><b>Tambah Kategori</b></div>
                      <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                             <label>Nama Kategori</label>
                             <input type="text" name="category_name" class="form-control  @error('category_name') is-invalid @enderror" value="{{ old('category_name') }}">
                             @error('category_name')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                          <div class="form-group">
                             <label>Gambar</label>
                             <input type="file" name="category_image" class="form-control" required>
                         </div>
                         <button class="btn btn-primary float-right" type="submit">Simpan</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
@foreach ($editCategory as $category)
       <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal fade" id="edit{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}" required>
                        </div>
                         <div class="form-group row">
                           <div class="col-sm-4">
                             <img src="{{ asset('storage/category/'.$category->category_image) }}" width="80px" alt="">
                           </div>
                            <div class="col-sm-8">
                                <input type="file" name="category_image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
       </form>
@endforeach
 @endsection