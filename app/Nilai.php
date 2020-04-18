<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';

    protected $fillable = [
        'id_kuis', 'id_siswa', 'nilai',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function kuis()
    {
        return $this->belongsTo(Kuis::class, 'id_kuis');
    }

    // public function jawaban()
    // {
    //     return $this->hasOne(JawabanSiswa::class);
    // }

    public function soal()
    {
        return $this->hasOne(Soal::class);
    }
}
