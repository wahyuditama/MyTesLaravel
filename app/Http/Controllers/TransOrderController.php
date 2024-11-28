<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
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
        $oder = Order::get()->last();
        $ide_order = $oder->id ?? '';
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
        order::create([
            "order_name" => $request->order_name,
            "phone" => $request->phone,
            "adress" => $request->adress
        ]);
        Alert::success('Berhasil Broo', 'Data Berhasil Ditambah');

        return redirect()->to('order');
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
        return redirect()->to("order");
    }

    public function delete($id)
    {
        $porder = service::find($id)->delete();
        return redirect()->to("paket");
    }
}
