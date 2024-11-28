@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary text-white">Daftar Paket</a>
        </div>
        <div class="card-body">
            <div class="mb-3" align="right">
                <a href="{{ route('paket.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Paket</th>
                        <th>Harga paket</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $key => $val)
                         <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->service_name }}</td>
                            <td>{{ $val->price }}</td>
                            <td>{{ $val->description }}</td>
                            <td>
                                <a href="{{ route('paket.edit', $val->id) }}" class="btn btn-outline-warning btn-sm"><i class="tf-icons bx bx-pencil"></i></a>
                                <form method="POST" action="{{ route('paket.destroy', $val->id) }}" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-outline-danger btn-sm">
                                        <i class="tf-icons bx bx-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
