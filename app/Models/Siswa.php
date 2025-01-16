<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $guarded=[];

    public $primaryKey = 'nis';
    public $incrementing = false;

    public function kelas(){
        return $this->belongsTo(Kelas::class,'kode_kelas','kode_kelas');
    }

    public function nilai(){
        return $this->hasMany(Nilai::class,'nis','nis');
    }

    public function mapel(){
        return $this->belongsToMany(Mapel::class,'nilais','nis','mapel_id');
    }
}
