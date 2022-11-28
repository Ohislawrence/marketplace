<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'desc',
        'type',
        'parent_id',
    ];


    public function subcategory()
    {
        return $this->hasMany(\App\Models\Productcategory::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\Productcategory::class, 'parent_id');
    }

    public function type()
    {
        return $this->belongsTo(\App\Models\Type::class, 'type' );
    }


    public function product()
    {
        return $this->hasMany(\App\Models\Product::class );
    }
}
