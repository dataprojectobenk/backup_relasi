<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public $guarded =[];

    public function siswa(){
        return $this->belongsTo(Siswa::class,'nis','nis');
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class,'mapel_id','id');
    }
}
