<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanSiswa extends Model
{
    protected $table = 'jawaban_siswa';

    protected $fillable = [
        'id_siswa', 'jawaban',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
