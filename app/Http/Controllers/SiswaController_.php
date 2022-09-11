<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    function index()
    {
        // $data = siswa::all();
        $data = siswa::orderBy('nomor_induk', 'desc')->paginate(1);
        return view('siswa/index')->with('data', $data);
    }
    function detail($id)
    {
        // return "<h1>Saya SISWA dari Controller dengan Id $id</h1>";
        $data = siswa::where('nomor_induk', $id)->first();
        return view('siswa/show')->with('data', $data);
    }
}
