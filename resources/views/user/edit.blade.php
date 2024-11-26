@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
        <div class="card">
        <div class="card-header">Edit Pengguna</div>
        <div class="card-body">
           <form action="{{ route('user.update',$user->id) }}" method="post">
            @csrf
            @method('put')
               <div class="form-group mb-3">
                   <label for="nama">Nama</label>
                   <input type="text" value="{{ $user->name }}" class="form-control" id="nama" name="name" required>
               </div>
               <div class="form-group mb-3">
                   <label for="email">Email</label>
                   <input type="email" value="{{ $user->email }}" class="form-control" id="email" name="email" required>
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
