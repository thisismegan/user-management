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
            body {
        min-height: 1500px;
    }

    .rating {
        font-size: smaller;
    }

    .jumbotron-slide {
        margin-top: 70px;
    }

    .detail-produk {
        margin-top: 70px;
    }

    .line-break-product {
        position: relative;
        display: block;
        height: 8px;
        width: 100%;
        border: none;
        background: var(--N75, #E5E7E9);
        margin: 40px 0px;
    }

    .card-title {
        font-size: small;
    }

    .card-product {
        height: 280px !important;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('storage/logo.png') }}" alt="Logo" height="35" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
                <form class="mx-2  my-auto d-inline w-100" role="search" method="GET" action="{{ route('home') }}">
                    <div class="input-group">
                        <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Cari nama produk..."
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <button class="btn btn-outline-dark border-left-0" type="submit"><i
                                class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                @if(Auth::check())
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="" class="btn btn-dark mx-2"><i class="fas fa-shopping-basket"></i></a>
                     </li>
                        <li class="nav-item">
                            <a class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-alt"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="">Riwayat Pembelian</a></li>
                                <li><a class="dropdown-item" href="#">Ubah Password</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Keluar</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @else
                 <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <a href="{{ route('login-page') }}" class="btn btn-outline-dark">Masuk</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('register-page') }}" class="btn btn-dark ">Daftar</a></li>
                </ul>
                @endif
            </div>
        </div>
    </nav>
    