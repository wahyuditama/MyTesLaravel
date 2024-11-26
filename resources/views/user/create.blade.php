@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
        <div class="card">
        <div class="card-header">Data Pengguna</div>
        <div class="card-body">
           <form action="{{ route('user.store') }}" method="post">
            @csrf
               <div class="form-group mb-3">
                   <label for="nama">Nama</label>
                   <input type="text" class="form-control" id="nama" name="name" required>
               </div>
               <div class="form-group mb-3">
                   <label for="email">Email</label>
                   <input type="email" class="form-control" id="email" name="email" required>
               </div>
               <div class="form-group mb-3">
                   <label for="password">Password</label>
                   <input type="password" class="form-control" id="password" name="password" required>
               </div>
                   <button type="submit" class="btn-outline-primary">Tambah</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
