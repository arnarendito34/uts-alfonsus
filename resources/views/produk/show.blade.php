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
    <nav class="navbar navbar-expand-md navbar-dark bg-black">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi bi-apple me-2"></i> Data Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('produk.index') }}" class="nav-link active">Product List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                    <a href="{{ route('produk.create') }}" class="btn btn-success my-2 ms-md-auto"><i class="bi bi-plus-square-fill me-1"></i> Create Product</a>
            </div>
        </div>
    </nav>

    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <h4>Detail Product</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kodebarang" class="form-label">Kode Barang</label>
                        <h5>{{ $produk->kodebarang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="namabarang" class="form-label">Nama Barang</label>
                        <h5>{{ $produk->namabarang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="hargabarang" class="form-label">Harga Barang</label>
                        <h5>{{ $produk->hargabarang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsibarang" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $produk->deskripsibarang }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan_id" class="form-label">Kategori</label>
                        <h5>{{ $produk->satuan->namaSatuan }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('produk.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
