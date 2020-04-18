<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KuisSiswa extends Model
{
    protected $table = 'kuis_siswa';
    protected $fillable = [
        'id_kuis', 'id_siswa'
    ];

    public function kuis()
    {
        return $this->belongsTo(Kuis::class, 'id_kuis');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
