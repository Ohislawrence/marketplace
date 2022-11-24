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
        'user_id'

    ];



    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
