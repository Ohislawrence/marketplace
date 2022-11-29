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
        'access',
        'short_summary',
        'integrations',
        'ideal_for',
        'alternative_to',
        'redeem_url',
        'redeem_instructions',
        'TLDR',
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
        return $this->belongsTo(\App\Models\Type::class, 'plantype_id' );
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Productcategory', 'productcategory_id' );
    }

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

}
