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
        return $this->hasMany(Jurusan::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
