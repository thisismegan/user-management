 @extends('admin.layout.index')

 @section('content')
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="row">
         <div class="col-md-12">
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
                    <div class="card-title float-left">Daftar User</div>
                    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm float-right">Tambah Admin</a>
                     <table class="table table-bordered">
                         <thead>
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Foto</th>
                                 <th scope="col">Akses</th>
                                 <th scope="col">Nama</th>
                                 <th scope="col">Email</th>
                                 <th scope="col">Opsi</th>
                             </tr>
                         </thead>
                         <tbody>
                        <?php $i=1; ?>
                        @foreach ($users as $user)
                            @if($user->id == Auth::user()->id)
                            @continue
                            @endif
                            <tr>
                                 <th scope="row">{{ $i++ }}</th>
                                 <td><img src="{{ asset('storage/users/'.$user->photo) }}" alt="" width="40px"></td>
                                 <td>
                                    <span 
                                    class="badge @if($user->role_id == 1) badge-primary @elseif($user->role_id == 2) badge-success @else badge-warning @endif ">
                                    {{ $user->role->role_name }}
                                </span></td>
                                 <td>{{ $user->name }}</td>
                                 <td> {{$user->email}} </td>
                                 <td>
                                  <div class="row">
                                    <a class="btn btn-warning btn-sm mx-2" href="{{ route('user.edit',$user->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                    <form class="mr-2" method="POST" action="{{ route('delete-user') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $user->id }}">
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