<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title>{{ $title ?? '' }}</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card mt-5 shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="card-header mb-3">
                        <h3 style="font-family:Edu AU VIC WA NT Pre", cursive; >Kalkulator Hari Ini !!</h3>
                    </div>
                    <div class="d-flex mx-auto">
                        <a class="btn btn-outline-primary mx-1" href="{{ route('tambah') }}">Tambah</a>
                        <a class="btn btn-outline-primary mx-1" href="{{ route('kurang') }}">Kurang</a>
                        <a class="btn btn-outline-primary mx-1" href="{{ route('kali') }}">Kali</a>
                        <a class="btn btn-outline-primary mx-1" href="{{ route('bagi') }}">Bagi</a>
                        <a class="btn btn-outline-primary mx-1" href="{{ route('user.index') }}">Index</a>
                    </div>
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
