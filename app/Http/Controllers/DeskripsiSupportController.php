<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DeskripsiSupportController extends Controller
{
    public function deskripsiBarang($id3)
    {
        $detailBrg = DB::table('tbl_barang')
            ->where('Id_Brg', $id3)
            ->first();

        return view('Deskripsi Support', compact('detailBrg'));
    }
}
