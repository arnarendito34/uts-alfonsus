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
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('produk.index') }}" class="nav-link active">Employee List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                    <a href="{{ route('produk.create') }}" class="btn btn-success my-2 ms-md-auto"><i class="bi bi-plus-square-fill me-1"></i> Create Product</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
        </div>
        <hr>
        <div >
            <table class="table table-bordered table-hover table-secondary table-striped mb-0 bg-white">
                <thead>
                    <tr class="table-warning">
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                @foreach ($produks as $produk)
                <td>{{ $produk->kodebarang }}</td>
                <td>{{ $produk->namabarang }}</td>
                <td>{{ $produk->hargabarang }}</td>
                <td>{{ $produk->deskripsibarang }}</td>
                <td>{{ $produk->satuan_id }}</td>
                <td>
                    <div class="d-flex">
                    <a href="{{ route('produk.show', ['produk' => $produk->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                    <a href="{{ route('produk.edit', ['produk'=>$produk->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                    <div>

                        <div>
                            <form action="{{ route('produk.destroy',['produk' =>$produk->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                            </form>
                            </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
