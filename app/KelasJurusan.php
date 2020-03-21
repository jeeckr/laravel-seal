<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelasJurusan extends Model
{
    protected $table = 'kelas_jurusan';

    protected $fillable = [
        'id_kelas', 'id_jurusan'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
