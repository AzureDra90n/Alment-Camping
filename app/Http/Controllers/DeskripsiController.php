<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeskripsiController extends Controller
{
    public function deskripsiBarang($id)
    {
        $detailBrg = DB::table('tbl_barang')
            ->where('Id_Brg', $id)
            ->get();

        return view('Deskripsi', compact('detailBrg'));
    }
}
