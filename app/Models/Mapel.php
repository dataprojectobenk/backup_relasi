<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public $guarded = [];

    public function nilai(){
        return $this->hasMany(Nilai::class,'mapel_id','id');
    }

    public function guru(){
        return $this->belongsTo(Guru::class,'guru_id','id');
    }

    public function siswa(){
        return $this->belongsToMany(Siswa::class,'nilais','mapel_id','nis');
    }
}
