<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = "categories";
    protected $fillable =
        [
            'name','description','photo', 'comments',
        ];

    protected $dates = ['deleted_at'];
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
