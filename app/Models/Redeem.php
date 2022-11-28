<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Redeem extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'item',
        'redeemed',
        'code_or_file',
        'upload_method',
        'product_id',

    ];
    //protected $primaryKey = 'id';
}
