@extends('layout.app')
@section('content')
    <div class="row">

        <div class="card">
             <div class="card-header">{{ $title ?? '' }}</div>
        <div class="card-body">
           <form action="{{ route('trans_order.store') }}" method="post">
            @csrf
             <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                   <label for="nama">No Transaksi</label>
                   <input type="text" class="form-control" id="nama" name="order_code" value="{{ $order_code ?? '' }}">
                   </div>
                   <div class="form-group mb-3">
                      <label for="nama">Tanggal laundry</label>
                      <input type="date" class="form-control" id="nama" name="order_date" value="{{ $order_date ?? '' }}">
                  </div>
               </div>
              <div class="col-md-6">
                <div class="form-group mb-3">
                <label for="nama">Nama Pelanggan</label>
                <select name="id_customer" id="" class="form-control" >
                    <option value="">---Pilih Pelanggan---</option>
                    @foreach($customers as $customer)
                    <option value="{{$customer->id }}">{{ $customer->customer_name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="nama" name="end_order_date" value="{{ $end_order_date?? '' }}">
                </div>
              </div>
             </div>
             <div class="mb-3" align="right">
                 <button type="submit" id="add-row" class="btn-outline-secondary add-row">Tambah Baris</button>
             </div>
              <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Nama Paket</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="tbody-parent">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
              </div>
                   <button type="submit" class="btn-outline-primary mt-3">Submit</button>
                </form>
                </div>
            </div>
        </div>
        </div>
@endsection
