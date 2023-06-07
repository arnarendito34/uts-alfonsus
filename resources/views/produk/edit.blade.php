<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pagetitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-black ">
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
            </div>
        </div>
    </nav>

    <div class="container-sm mt-5">
        <form action="{{ route('produk.update',['produk' => $produks->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">

                    <div class="mb-3 text-center">
                        <h4>Create Product</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kodeBarang') is-invalid @enderror" type="text" name="kodebarang" id="kodebarang" value="{{ old('kodebarang', $produks->kodebarang) }}" placeholder="Kode Barang">
                                @error('kodeBarang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('namaBarang') is-invalid @enderror" type="text" name="namabarang" id="namabarang" value="{{ old('namaBarang',$produks->namabarang) }}" placeholder="Nama Barang">
                                @error('namaBarang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('hargaBarang') is-invalid @enderror" type="text" name="hargabarang" id="hargabarang" value="{{ old('hargaBarang',$produks->hargabarang) }}" placeholder="Harga (Rp)">
                                @error('hargaBarang')
                            <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                        <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                        <textarea class="form-control @error('deskripsiBarang') is-invalid @enderror" id="deskripsibarang" rows="3" name="deskripsibarang" value="{{ old('deskripsiBarang') }}" placeholder="Isi Deskripsi barang">{{$produks->deskripsibarang}}</textarea>
                            @error('deskripsiBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan Barang</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                    $selected = "";
                                    if ($errors->any())
                                        $selected = old('satuan');
                                    else
                                        $selected = $produks->satuan_id;
                                @endphp
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ old('satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->kodeSatuan}}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('produk.index') }}" class="btn btn-danger btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-success btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
            </div>
        </form>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
