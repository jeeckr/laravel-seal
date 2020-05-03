<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_kelas',
    ];

    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class, 'kelas_jurusan');
    }

    public function kelasJurusan()
    {
        return $this->hasMany(KelasJurusan::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
