<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table='products';
    protected $fillable=[
        'title',
        'category_id',
        'price',
        'description',
        'photo',
        'comments',
    ];

    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->hasOne(Category::class,'id', 'category_id');
    }
}

