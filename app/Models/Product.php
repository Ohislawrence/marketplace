<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'name',
        'slug',
        'desc',
        'keypoints',
        'price',
        'discount',
        'url',
        'user_id',
        'qty',
        'is_approved',
        'uniqueId',
        'featureimage',
        'certificate',
        'resourcetype_id',
        'plantype_id',
        'time_offer',
        'time_offer_ends',
        'productcategory_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Productimage');
    }


    public function type()
    {
        return $this->belongsTo('App\Models\Type', 'plantype_id' );
    }

}
