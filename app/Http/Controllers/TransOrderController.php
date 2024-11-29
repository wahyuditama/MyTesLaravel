<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\Service;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class TransOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * form
        $orders = order::with('customer')->get();
        $title = "Data Transaksi";
        return view("order.index", compact("orders", "title"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Tambah Transaksi';
        $order = Order::get()->last();
        $ide_order = $order->id ?? '';
        $ide_order++;
        $order_code = "L" . date('Y-m-d') . sprintf(`%03s %04s`, $ide_order);
        $customers = Customer::get();
        $services = Service::get();
        return view("order.create", compact('title', 'order_code', 'customers', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $order = Order::create($request->all());
        foreach ($request->id_paket as $key => $val) {
            OrderDetail::create([
                'id_order' => $order->id,
                'id_service' => $request->id_paket[$key],
                'price_service' => $request->price_service[$key],
                'qty' => $request->qty[$key],
                'subtotal' => $request->subtotal[$key]
            ]);
        }
        Alert::success('Berhasil Broo', 'Data Berhasil Ditambah');

        return redirect()->to('trans_order');
        // order::create([
        //     "order_name" => $request->order_name,
        //     "phone" => $request->phone,
        //     "adress" => $request->adress
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // $title = "Edit Transaksi';
        // $order = Order::get()->last();
        // $order = order::find($id);
        // return view("order.edit", compact("order"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $order = order::find($id);
        $order->order_name = $request->order_name;
        $order->phone = $request->phone;
        $order->adress = $request->adress;
        $order->save();
        Alert::success('Berhasil Broo', 'Data Berhasil Diubah');
        return redirect()->to("order");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $order = order::find($id)->delete();
        Alert::success('Berhasil Broo', 'Data Berhasil Dihapus');
        return redirect()->to("trans_order");
    }

    public function delete($id)
    {
        $porder = service::find($id)->delete();
        return redirect()->to("paket");
    }

    public function getPaket($id_paket)
    {
        // $paket = service::where("id", $id_paket)->first(); // Cara Pertama
        $paket = Service::find($id_paket); // Cara kedua
        return response()->json($paket);
    }
}
