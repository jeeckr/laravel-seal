<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

    protected $fillable = [
        'id_guru', 'id_jurusan', 'nama_mapel', 'deskripsi',
    ];

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class);
    }

    public function kuis()
    {
        return $this->hasMany(Kuis::class);
    }
}
