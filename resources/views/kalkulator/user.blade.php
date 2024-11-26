@extends('kalkulator.index')
@section('content')
 @csrf
<h5 class="mt-4" style="font-family: Edu AU VIC WA NT Pre", cursive;>Data Pengguna</h5>
<a href="{{ route('user.create') }}">Tambah User</a>
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('user.edit', $user->id) }}">Edit</a>
                {{-- Get, Delete --}}
                {{-- <a href="{{ route('delete',$user->id) }}" onclick="return confrim('Apakah anda yakin ingin menghapus data ini')">Delete</a> --}}
                <form action="{{ route('user.destroy', $user->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a class="btn btn-click">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection
