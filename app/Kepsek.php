<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;

class Kepsek extends Authenticatable
{
    protected $table = 'kepsek';

    protected $fillable = [
        'nip', 'nama_depan', 'nama_belakang', 'alamat', 'jk', 'image', 'email', 'password'
    ];

    public function showImage()
    {
        if (Storage::has($this->image)) {
            return asset('storage/' . $this->image);
        }
        return asset('images/defaultImage.png');
    }
}
