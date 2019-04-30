<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'ip_address',
        'name',
        'mobile_no',
        'shipping_address',
        'email',
        'massage',
        'is_paid',
        'is_complete',
        'is_seen_by_admin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
