<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = ['hari_id',  'matkul_id', 'kelas_id', 'dosen_id', 'jam_mulai', 'jam_selesai', 'ruang_id'];

    public function hari(){
        return $this->belongsTo(Hari::class);
    }
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    public function ruang(){
        return $this->belongsTo(Ruang::class);
    }
    public function matkul(){
        return $this->belongsTo(MataKuliah::class);
    }
    
}
