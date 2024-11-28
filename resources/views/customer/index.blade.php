@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary text-white">Daftar pelanggan</a>
        </div>
        <div class="card-body">
            <div class="mb-3" align="right">
                <a href="{{ route('customer.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama pelanggan</th>
                        <th>No Telepon pelanggan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $key => $val)
                         <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->customer_name }}</td>
                            <td>{{ $val->phone }}</td>
                            <td>{{ $val->adress }}</td>
                            <td>
                                <a href="{{ route('customer.edit', $val->id) }}" class="btn btn-outline-warning btn-sm"><i class="tf-icons bx bx-pencil"></i></a>
                                <form method="POST" action="{{ route('customer.destroy', $val->id) }}" class="d-inline">
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
