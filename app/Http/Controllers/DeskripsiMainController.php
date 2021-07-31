<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeskripsiMainController extends Controller
{
    public function deskripsiBarang($id)
    {
        $detailBrg = DB::table('tbl_barang')
            ->where('Id_Brg', $id)
            ->first();

        return view('Deskripsi', compact('detailBrg'));
    }
}
