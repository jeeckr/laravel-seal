<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';

    protected $fillable = [
        'nama_mapel',
    ];

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}
