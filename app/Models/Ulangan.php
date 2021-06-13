<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulangan extends Model
{
    use HasFactory;
    protected $fillable = ['mhs_id', 'kelas_id', 'dosen_id', 'matkul_id', 'ulha_1', 'ulha_2', 'uts', 'ulha_3', 'uas'];
}
