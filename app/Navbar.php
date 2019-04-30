<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Navbar extends Model
{
    use SoftDeletes;

    protected $table = 'navbars';
    protected $fillable = [
        'title',
    ];

    protected $dates = ['deleted_at'];
}
