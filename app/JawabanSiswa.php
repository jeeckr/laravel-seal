<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanSiswa extends Model
{
    protected $table = 'jawaban_siswa';

    protected $fillable = [
        'id_siswa', 'id_soal', 'id_nilai', 'jawaban',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function soal()
    {
        return $this->belongsTo(Soal::class, 'id_soal');
    }

    // public function nilai()
    // {
    //     return $this->belongsTo(Nilai::class, 'id_nilai');
    // }
}
