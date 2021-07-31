<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeskripsiDineController extends Controller
{
    public function deskripsiBarang($id2)
    {
        $detailBrg = DB::table('tbl_barang')
            ->where('Id_Brg', $id2)
            ->first();

        return view('Deskripsi Dine', compact('detailBrg'));
    }
}
