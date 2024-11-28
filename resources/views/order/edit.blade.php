@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
        <div class="card">
        <div class="card-header">Edit Service</div>
        <div class="card-body">
           <form action="{{ route('paket.update',$service->id) }}" method="post">
            @csrf
            @method('put')
               <div class="form-group mb-3">
                   <label for="nama">Nama Paket</label>
                   <input type="text" value="{{ $service->service_name }}" class="form-control" id="nama" name="service_name" required>
               </div>
               <div class="form-group mb-3">
                   <label for="">Harga</label>
                   <input type="number" value="{{ $service->price }}" class="form-control" id="" name="price" required>
               </div>
               <div class="form-group mb-3">
                   <label for="">Description</label>
                   <input type="text" value="{{ $service->description }}" class="form-control" id="" name="description" required>
               </div>
                   <button type="submit" class="btn-outline-primary">Tambah</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
