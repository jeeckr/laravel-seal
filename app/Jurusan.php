<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_kelas', 'nama_jurusan'
    ];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class);
    }

    public function kelasJurusan()
    {
        return $this->hasMany(KelasJurusan::class);
    }

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
