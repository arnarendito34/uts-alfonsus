@php
    $currentRouteName = Route::currentRouteName();
@endphp

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
