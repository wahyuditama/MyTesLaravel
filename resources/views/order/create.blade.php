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
                   <input type="text" class="form-control" id="nama" name="order_code" value="{{ $order_code ?? '' }}" readonly>
                   </div>
                   <div class="form-group mb-3">
                      <label for="nama">Tanggal laundry</label>
                      <input type="date" class="form-control" id="nama" name="order_date" value="{{ $order_date ?? '' }}">
                  </div>
                  <div class="form-group mb-3">
                    <label for="nama">Paket Laundry</label>
                    <select class="form-control" id="id_paket" name="">
                        <option value="">---Pilih Paket---</option>
                        @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <input type="hidden" id="price">
               </div>
              <div class="col-md-6">
                <div class="form-group mb-3">
                <label for="nama">Nama Pelanggan</label>
                <select name="id_customer" id="id_customer" class="form-control" >
                    <option value="">---Pilih Pelanggan---</option>
                    @foreach($customers as $customer)
                    <option value="{{$customer->id }}">{{ $customer->customer_name }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="nama" name="order_end_date" value="{{ $end_order_date?? '' }}">
                </div>
                <div class="form-group mb-3">
                    <label for="">Qty (Kg)</label>
                    <input type="number" class="form-control qty" id="qty" placeholder="Masukan Banyak Barang">
                </div>
              </div>
             </div>
             <div class="mb-3" align="right">
                 <button id="add-row" class="btn-outline-secondary add-row" type="button">Tambah Baris</button>
             </div>
              <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Nama Paket</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody class="tbody-parent">
                        <tfoot>
                            <tr>
                                <td colspan="3" align="right">Total</td>
                                <td>

                                    <input type="text" name="total_price" class="total-harga form-control" id="">
                                    <input type="hidden" name="order_status" value="0">
                                </td>
                            </tr>
                        </tfoot>
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
