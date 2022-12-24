<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternativeto extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'desc',
        'type',
    ];


    public function product()
    {
        return $this->hasMany(\App\Models\Product::class );
    }
}
