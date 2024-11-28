@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
        <div class="card">
        <div class="card-header">{{ $title ?? '' }}</div>
        <div class="card-body">
           <form action="{{ route('paket.store') }}" method="post">
            @csrf
               <div class="form-group mb-3">
                   <label for="nama">Nama Paket</label>
                   <input type="text" class="form-control" id="nama" name="service_name" required>
               </div>
               <div class="form-group mb-3">
                   <label for="email">Harga Paket</label>
                   <input type="number" class="form-control" id="price" name="price" required>
               </div>
               <div class="form-group mb-3">
                   <label for="text">Deskripsi</label>
                   <input type="text" class="form-control" id="Deskripsi" name="description" required>
               </div>
                   <button type="submit" class="btn-outline-primary">Tambah</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
