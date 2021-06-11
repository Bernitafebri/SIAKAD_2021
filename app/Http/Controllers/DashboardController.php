<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\User;
use App\Models\Ruang;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::count();
        $mahasiswa = Mahasiswa::count();
        $matkul = MataKuliah::count();
        $ruang = Ruang::count();
        $user = User::count();
        return view('dashboard', compact('dosen', 'mahasiswa', 'matkul', 'ruang', 'user', ));
    }

    
}
