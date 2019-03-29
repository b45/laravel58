<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MahasiswaC extends Controller
{
    public function mhs()
    {
        $users = DB::table('mahasiswa')->get();

        return view ('mahasiswa',compact('users'));
    }
    public function form(Request $request)
    {
        $users = DB::table('mahasiswa')->get();
        $nama = $request->input('nama');
        $model = $request->input('model');
        return view ('mahasiswa',compact('nama','model','users'));
    }
}
