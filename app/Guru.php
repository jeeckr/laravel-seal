<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;


class Guru extends Authenticatable
{

    protected $table = 'guru';

    protected $fillable = [
        'nip', 'nama', 'nama_depan', 'nama_belakang', 'alamat', 'telepon', 'tempat_lahir', 'tanggal_lahir', 'jk', 'image', 'email', 'password'
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

    public function mapel()
    {
        return $this->hasOne(Mapel::class);
    }

    public function showImage()
    {
        if (Storage::has($this->image)) {
            return asset('storage/' . $this->image);
        }
        return asset('images/defaultImage.png');
    }
}
