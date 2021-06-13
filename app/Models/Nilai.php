<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = ['dosen_id', 'kkm', 'deskripsi_a', 'deskripsi_b', 'deskripsi_c', 'deskripsi_d'];

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
