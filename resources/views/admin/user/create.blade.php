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
                     <h6 class="m-0 font-weight-bold text-primary">Tambah Admin</h6>
                 </div>
                 <div class="card-body">
                     <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                             <label>Nama</label>
                             <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}">
                             @error('name')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Email</label>
                             <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}">
                             @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Kata Sandi</label>
                             <input type="password" name="password"  class="form-control  @error('password') is-invalid @enderror" value="{{ old('password') }}">
                             @error('password')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                        <div class="form-group">
                             <label>Konfirmasi Kata Sandi</label>
                             <input type="password" name="password_confirmation"  class="form-control">
                         </div>
                         <button class="btn btn-primary float-right" type="submit">Simpan</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection
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
                     <h6 class="m-0 font-weight-bold text-primary">Tambah Admin</h6>
                 </div>
                 <div class="card-body">
                     <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                             <label>Nama</label>
                             <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}">
                             @error('name')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Email</label>
                             <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}">
                             @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                         <div class="form-group">
                             <label>Kata Sandi</label>
                             <input type="password" name="password"  class="form-control  @error('password') is-invalid @enderror" value="{{ old('password') }}">
                             @error('password')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                         </div>
                        <div class="form-group">
                             <label>Konfirmasi Kata Sandi</label>
                             <input type="password" name="password_confirmation"  class="form-control">
                         </div>
                         <button class="btn btn-primary float-right" type="submit">Simpan</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection