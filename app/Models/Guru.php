<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    public $guarded =[];

    public function mapel(){
        return $this->hasMany(Mapel::class);
    }
}
