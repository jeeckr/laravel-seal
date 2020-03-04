<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MapelJurusan extends Model
{
    protected $table = 'mapel_jurusan';

    protected $fillable = [
        'id_jurusan', 'id_mapel',
    ];
}
