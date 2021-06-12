<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresensiMhs extends Model
{
    use HasFactory;
    protected $table = "presensi_mhs";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'user_id', 'tgl', 'jammasuk',];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
