<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'comment',
        'comment_id',
        'review',

    ];

    public function reply()
    {
        return $this->hasMany(\App\Models\Comment::class, 'comment_id');
    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\Comment::class, 'comment_id');
    }

    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'comment_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
