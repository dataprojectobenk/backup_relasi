<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $guarded=[];
    public $primaryKey ='kode_kelas';
    public $keyType ='string';
    public $incrementing =false;


    public function siswa(){
        return $this->hasMany(Siswa::class,'kode_kelas','kode_kelas');
    }
}
