<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = ['matkul_id', 'nama_kelas', 'dosen_id'];

    public function matkul(){
        return $this->belongsTo(MataKuliah::class);
    }
    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
