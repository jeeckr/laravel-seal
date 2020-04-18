<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class Siswa extends Authenticatable
{
    protected $table = 'siswas';

    protected $fillable = [
        'id_kelas_jurusan', 'nisn', 'nama_depan', 'nama_belakang', 'alamat', 'telepon', 'tempat_lahir', 'tanggal_lahir', 'jk', 'image', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function jurusan()
    {
        return $this->belongsToMany(Jurusan::class, 'id_jurusan');
    }

    public function jawaban()
    {
        return $this->hasMany(JawabanSiswa::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function kelasJurusan()
    {
        return $this->belongsTo(KelasJurusan::class, 'id_kelas_jurusan');
    }

    public function status()
    {
        return $this->hasMany(Status::class);
    }

    public function kuisSiswa()
    {
        return $this->hasMany(KuisSiswa::class);
    }

    public function showImage()
    {
        if (Storage::has($this->image)) {
            return asset('storage/' . $this->image);
        }
        return asset('images/defaultImage.png');
    }
}
