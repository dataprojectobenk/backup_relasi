<?php

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    $s = new Siswa();

    return view('siswa',[
        'siswa' => $s->with('kelas')->paginate(5)
    ]);
});

Route::get('/{nis}', function ($nis) {
    $s = new Siswa();
    $s = $s->with('nilai.mapel')->find($nis);
    $temp =[];
    foreach($s->nilai as $item){
        $t = $item;
        $t['nilai_akhir']=0.2*$item->formatif+0.3*$item->uts+0.4*$item->uas;
        $t['agregat']=$t['nilai_akhir']>85?"A":($t['nilai_akhir']>75?"B":($t['nilai_akhir']>65?"C":"D"));
        $temp[] = $t;
    }
    $s->nilai = $temp;
    return view('transkrip',[
        'siswa'=>$s
    ]);
});
