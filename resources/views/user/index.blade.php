@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">Data Pengguna</div>
        <div class="card-body">
            <div class="mb-3" align="right">
                <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->email }}</td>
                            <td>
                                <a href="{{ route('user.edit', $val->id) }}" class="btn btn-warning btn-sm"><i class="tf-icons bx bx-pencil"></i></a>
                                <form method="POST" action="{{ route('user.destroy', $val->id) }}" class="d-inline">
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
