@extends('kalkulator.index')
@section('content')
<form action="{{ route("store-kali") }}" method="post" style="margin: 20px;">
    @csrf
    <div class="container">
    <div class="row d-flex">
        <div class="col-md-5">
              <label for="" class="mb-3">Angka 1</label>
                <input type="number" class="form-control" name="angka1" required>
            </div>
            <div class="col-md-2"><h1> X </h1></div>
            <div class="col-md-5">
              <label for="" class="mb-3">Angka 2</label>
             <input type="number" class="form-control" name="angka2" required>
        </div>
    <button type="submit" class="mt-4">Proses</button>
    </div>
  </div>
</form>
<h3 style="font-family: Edu AU VIC WA NT Pre", cursive;>Hasil nya adalah: {{ $jumlah }} </h3>
@endsection
