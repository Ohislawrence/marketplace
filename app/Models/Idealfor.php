<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idealfor extends Model
{
    use HasFactory;
    protected $table = 'idealfors';


    public function product()
    {
        return $this->hasMany(\App\Models\Product::class );
    }
}
