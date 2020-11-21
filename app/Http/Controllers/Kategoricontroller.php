<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datakategori;

class Kategoricontroller extends Controller
{
    public function tampilkan(){
        $data = Datakategori::all();

        return view('index',['data'=>$data]);
    }
}

?>
