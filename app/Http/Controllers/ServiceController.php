<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * form
        $services = Service::get();
        $title = "Data Paket Laundry";
        return view("paket.index", compact("services", "title"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Tambah service';
        return view("paket.create", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        service::create([
            "service_name" => $request->service_name,
            "price" => $request->price,
            "description" => $request->description
        ]);
        Alert::success('Berhasil Broo', 'Data Berhasil Ditambah');

        return redirect()->to('paket');
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
        $title = "Edit Paket";
        $service = service::find($id);
        return view("paket.edit", compact("service"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $service = service::find($id);
        $service->service_name = $request->service_name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();
        Alert::success('Berhasil Broo', 'Data Berhasil Diubah');
        return redirect()->to("paket");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $service = service::find($id)->delete();
        Alert::success('Berhasil Broo', 'Data Berhasil Dihapus');
        return redirect()->to("paket");
    }

    public function delete($id)
    {
        $paket = service::find($id)->delete();
        return redirect()->to("paket");
    }
}
