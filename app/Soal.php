<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = 'soal';

    protected $fillable = [
        'id_kuis', 'soal', 'pilihan_a', 'pilihan_b', 'pilihan_c', 'pilihan_d', 'kunci',
    ];

    public function kuis()
    {
        return $this->belongsTo(Kuis::class, 'id_kuis');
    }
    public function jawaban()
    {
        return $this->hasMany(JawabanSiswa::class);
    }

    public function nilai()
    {
        return $this->belongsTo(Nilai::class);
    }
}
