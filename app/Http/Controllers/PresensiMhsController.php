<?php

namespace App\Http\Controllers;
use DateTime;
Use DateTimeZone;
use App\Models\PresensiMhs;
use Illuminate\Http\Request;

class PresensiMhsController extends Controller
{

    public function index()
    {
        return view('mahasiswa.presensi');
    }

   
    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensimhs = PresensiMhs::with('user')->whereBetween('tgl',[$tglawal, $tglakhir])->orderBy('tgl', 'asc')->get();
        return view('mahasiswa.rekapPresensi', compact('presensimhs'));
    }

    public function tampildataAdmin($tglawal, $tglakhir)
    {
        $presensimhs = PresensiMhs::with('user')->whereBetween('tgl',[$tglawal, $tglakhir])->orderBy('tgl', 'asc')->get();
        return view('admin.presensi.rekap-mhs', compact('presensimhs'));
    }

    
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensimhs = PresensiMhs::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        if($presensimhs){
            return redirect('/presensi-mhs')->with('success', 'Sudah Absen!');
        }else{
            PresensiMhs::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,
                'jammasuk' => $localtime,
            ]);
        }
        return redirect('/presensi-mhs');

    }

    public function halamanrekap()
    {
        return view('mahasiswa.HalamanrekapPresensi');
    }

    public function halamanrekapAdmin()
    {
        return view('admin.presensi.Hal-rekap-mhs');
    }

   
    
    public function destroy($id)
    {
        
    }
}
