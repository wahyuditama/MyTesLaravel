@extends('kalkulator.index')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Data User</div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                           <div class="mb-3">
                             <label for="">Nama</label>
                            <input type="text" name="name" class="form-control" id="">
                           </div>
                           <div class="mb-3">
                             <label for="">email</label>
                            <input type="email" name="email" class="form-control" id="">
                           </div>
                           <div class="mb-3">
                             <label for="">password</label>
                            <input type="password" name="password" class="form-control" id="">
                           </div>
                           <button >Simpan</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection