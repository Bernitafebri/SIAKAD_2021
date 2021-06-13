<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'nama_matkul', 'sks', 'semester',];

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
}
