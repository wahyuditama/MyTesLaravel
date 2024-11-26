<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    //
    public function index()
    {
        return "halo 123 yeaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
    }
    public function edit($id)
    {
        return "Ini Edit Dengan Nama Params" . $id;
    }

    public function delete($id)
    {
        return "Ini delete dengan nama params" . $id;
    }
}
