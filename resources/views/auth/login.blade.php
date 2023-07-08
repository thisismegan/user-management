<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    <style>
        .form-signin {
            max-width: 500px;
            margin-top: 60px !important;
            padding: 1rem;
        }
    </style>
</head>



<body>
    <div class="container">
        <div class="w-100 m-auto form-signin">
            <div class="card p-3">
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
                <h4 class="text-center"><b>Form Login</b></h4>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="text" class="form-control @if ($errors->has('email')) is-invalid @endif" value="{{ old('email'); }}">
                         @if ($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                         @endif
                    </div>
                   <div class="mb-3">
                    <label class="form-label">Kata Sandi</label>
                        <input name="password" type="password" class="form-control @if ($errors->has('password')) is-invalid @endif">
                        @if ($errors->has('password'))
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                        @endif
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Login</button>
                    </div>
                </form>
                <div>
                  <div class="float-end">Belum punya akun? <a href="{{route('register-page')}}">Daftar</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>