<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $table = 'kuis';

    protected $fillable = [
        'id_mapel', 'judul', 'jumlah_soal', 'waktu', 'status_kuis', 'status_siswa',
    ];

    public function soal()
    {
        return $this->hasMany(Soal::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    // public function status()
    // {
    //     return $this->hasMany(Status::class);
    // }
}
