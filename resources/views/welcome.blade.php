<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfonsus Antero A</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="p-3 mb-2 bg-black text-white">
        <div class="container text-center my-5">
            <h1 class="mb-4">Welcome To Toko Alponsus</h1>
            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/welcome.jpg') }}" alt="image">

            <div class="col-md-2 offset-md-5 mt-4">
                <div class="d-grid gap-2">
                    <a class="btn btn-light" href="{{url ('home')}}">Masuk</a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body bg-black">
                <div class="container">
                    <div class="container text-center">
                        <p class="text-white text-center">© 2023. Alfonsus Antero Arnayusrendito (1204210085) . All Rights Reserved</p>
                        <p class="text-white text-center">Designed By Arna Rendito</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
