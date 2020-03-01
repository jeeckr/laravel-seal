<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';

    protected $fillable = [
        'id_mapel', 'judul', 'bab', 'isi_materi'
    ];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
