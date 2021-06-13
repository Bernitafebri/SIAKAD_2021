<?php

namespace App\Http\Controllers;
use DateTime;
Use DateTimeZone;
use App\Models\PresensiDosen;
use Illuminate\Http\Request;

class PresensiDosenController extends Controller
{
    
    public function index()
    {
        return view('dosen.presensi.masuk');
    }

    
    public function keluar()
    {
        return view('dosen.presensi.keluar');
    }

    
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensidosen = PresensiDosen::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();
        if($presensidosen){
            return redirect('/presensi-masuk-dosen')->with('toast_success', 'Sudah Absen!');
        }else{
            PresensiDosen::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,
                'jammasuk' => $localtime,
            ]);
        }
        return redirect('/presensi-masuk-dosen');
    }

    public function presensipulang()
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensidosen = PresensiDosen::where([
            ['user_id','=',auth()->user()->id],
            ['tgl','=',$tanggal],
        ])->first();

        $dt = [
            'jamkeluar' => $localtime,
            'jamkerja' => date('H:i:s', strtotime($localtime) - strtotime($presensidosen->jammasuk))
        ];

        if($presensidosen->jamkeluar == ""){
            $presensidosen->update($dt);
            return redirect('/presensi-keluar-dosen')->with('toast_success', 'Berhasil Absen!');
        }else{
            return redirect('/presensi-keluar-dosen')->with('toast_success', 'Sudah Absen!');
        }
    }

    public function halamanrekap()
    {
        return view('dosen.presensi.HalamanrekapPresensi');
    }

    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensidosen = PresensiDosen::with('user')->whereBetween('tgl',[$tglawal, $tglakhir])->orderBy('tgl', 'asc')->get();
        return view('dosen.presensi.rekapPresensi', compact('presensidosen'));
    }
    
}
