<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'username',
        'coverimage',
        'profileimage',
        'location',
        'website',

    ];



    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
