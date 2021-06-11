<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nip', 'gender', 'address', 'noHP', 'pengampu_matkul', 'prodi'];

}
