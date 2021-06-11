<?php

namespace App\Http\Controllers;
use App\Models\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function index()
    {
        $ruangs = Ruang::all();
        return view('admin.ruang.index', compact('ruangs'));
    }
}
