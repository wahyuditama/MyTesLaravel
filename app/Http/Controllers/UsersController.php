<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Facades\SweetAlert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * form
        $users = User::get();
        $title = "Data Users";
        return view("user.index", compact("users", "title"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'Tambah User';
        return view("user.create", compact("title"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password
        ]);
        Alert::success('Berhasil Broo', 'Data Berhasil Ditambah');

        return redirect()->to('user');
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
        $title = "Edit User";
        $user = User::find($id);
        return view("user.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if ($request->password) {
            User::where("id", $id)->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password)
            ]);
        } else {
            User::where("id", $id)->update([
                "name" => $request->name,
                "email" => $request->email,
            ]);
        }
        Alert::success('Berhasil Broo', 'Data Berhasil Diubah');
        return redirect()->to("user");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id)->delete();
        Alert::success('Berhasil Broo', 'Data Berhasil Dihapus');
        return redirect()->to("user");
    }

    public function delete($id)
    {
        $user = User::find($id)->delete();
        return redirect()->to("user");
    }
}
