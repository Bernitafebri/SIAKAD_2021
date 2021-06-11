<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = ['hari_id',  'matkul_id', 'dosen_id', 'jam_mulai', 'jam_selesai', 'ruang_id'];

    public function Hari()
    {
        return $this->belongsTo('App\Models\Hari')->withDefault();
    }

    public function MataKuliah()
    {
        return $this->belongsTo('App\Models\MataKuliah')->withDefault();
    }

    public function Dosen()
    {
        return $this->belongsTo('App\Models\Dosen')->withDefault();
    }

    public function Ruang()
    {
        return $this->belongsTo('App\Models\Ruang')->withDefault();
    }
}
