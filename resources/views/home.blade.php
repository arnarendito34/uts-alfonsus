<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    {{--<div class="bg-black text-black">--}}
        <nav class="navbar navbar-expand-md navbar-dark bg-black">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi bi-apple me-2"></i> Data Barang</a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <hr class="d-lg-none text-white-50">

                    <ul class="navbar-nav flex-row flex-wrap">
                        <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                        <li class="nav-item col-2 col-md-auto"><a href="{{ route('produk.index') }}" class="nav-link">Product List</a></li>
                    </ul>

                    <hr class="d-lg-none text-white-50">

                    <a href="{{ route('produk.create') }}" class="btn btn-success my-2 ms-md-auto"><i class="bi bi-plus-square-fill me-1"></i> Create Product</a>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <h4>Selamat Datang Di {{ $pageTitle }}</h4>
            <hr>
            {{--<div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
                <div class="bi bi-clipboard2-plus-fill me-3 fs-1"></div>
                <h4 class="mb-0"> Tambah List Barang Elektronik</h4> <button type="button" class="btn btn-success">Add</button>
            </div>
            <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
                <div class="bi bi-clipboard2-data-fill me-3 fs-1"></div>
                <h4 class="mb-0"> Daftar List Barang Elektronik</h4> <button type="button" class="btn btn-success">View</button>
            </div>--}}
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
