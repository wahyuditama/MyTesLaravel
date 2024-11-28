@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary text-white">Daftar pelanggan</a>
        </div>
        <div class="card-body">
            <div class="mb-3" align="right">
                <a href="{{ route('trans_order.create') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama pelanggan</th>
                        <th>No Transaksi</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $val)
                         <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->customer->customer_name }}</td>
                            <td>{{ $val->order_code }}</td>
                            <td>{{ $val->order_date }}</td>
                            <td>{{ $val->order_end_date }}</td>
                            <td>{{ $val->order_status }}</td>
                            <td>
                                <a href="{{ route('trans_order.show', $val->id) }}" class="btn btn-outline-warning btn-sm"><i class="tf-icons bx bx-show"></i></a>
                                <form method="POST" action="{{ route('trans_order.destroy', $val->id) }}" class="d-inline">
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
