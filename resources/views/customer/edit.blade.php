@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
        <div class="card">
        <div class="card-header">Edit Pelanggan</div>
        <div class="card-body">
           <form action="{{ route('customer.update',$customer->id) }}" method="post">
            @csrf
            @method('put')
               <div class="form-group mb-3">
                   <label for="nama">Nama pelanggan</label>
                   <input type="text" value="{{ $customer->	customer_name }}" class="form-control" id="nama" name="customer_name" required>
               </div>
               <div class="form-group mb-3">
                   <label for="">Nomor Telepon</label>
                   <input type="number" value="{{ $customer->phone }}" class="form-control" id="" name="phone" required>
               </div>
               <div class="form-group mb-3">
                   <label for="">Alamat</label>
                   <input type="text" value="{{ $customer->adress }}" class="form-control" id="" name="adress" required>
               </div>
                   <button type="submit" class="btn-outline-primary">Tambah</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
