<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Pendaftaran</h1>
                                    </div>
                                    <form class="user" method="post" action="/register">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user @if ($errors->has('email')) is-invalid @endif" value="{{ old('email'); }}" placeholder="Silahkan masukkan email">
                                            @if ($errors->has('email'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user @if ($errors->has('name')) is-invalid @endif" value="{{ old('name') }}" placeholder="Silahkan masukkan nama anda">
                                            @if ($errors->has('name'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user @if ($errors->has('password')) is-invalid @endif" placeholder="Masukkan kata sandi">
                                            @if ($errors->has('password'))
                                            <small class="text-danger">{{ $errors->first('password') }}</small>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class=" form-control form-control-user @if ($errors->has('password')) is-invalid @endif" placeholder="Konfirmasi kata sandi">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= url('assets') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= url('assets') ?>/js/sb-admin-2.min.js"></script>

</body>

</html>