<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

    protected $fillable = [
        'id_guru', 'id_kelas_jurusan', 'nama_mapel', 'deskripsi',
    ];

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function kelasJurusan()
    {
        return $this->belongsTo(KelasJurusan::class, 'id_kelas_jurusan');
    }

    public function kuis()
    {
        return $this->hasMany(Kuis::class);
    }
}
