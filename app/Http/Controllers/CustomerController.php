<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * form
        $customers = Customer::get();
        $title = "Data Pelanggan";
        return view("customer.index", compact("customers", "title"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Tambah Pelanggan';
        return view("customer.create", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Customer::create([
            "customer_name" => $request->customer_name,
            "phone" => $request->phone,
            "adress" => $request->adress
        ]);
        Alert::success('Berhasil Broo', 'Data Berhasil Ditambah');

        return redirect()->to('customer');
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
        $title = "Edit pelanggan";
        $customer = Customer::find($id);
        return view("customer.edit", compact("customer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $customer = customer::find($id);
        $customer->customer_name = $request->customer_name;
        $customer->phone = $request->phone;
        $customer->adress = $request->adress;
        $customer->save();
        Alert::success('Berhasil Broo', 'Data Berhasil Diubah');
        return redirect()->to("customer");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $customer = customer::find($id)->delete();
        Alert::success('Berhasil Broo', 'Data Berhasil Dihapus');
        return redirect()->to("customer");
    }

    public function delete($id)
    {
        $pelanggan = customer::find($id)->delete();
        return redirect()->to("customer");
    }
}
