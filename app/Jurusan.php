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
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class);
    }
}
