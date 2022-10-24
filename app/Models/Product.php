<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'photo', 'stock'];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'products_users',
            'product_id',
            'user_id'
        )->withTimestamps()->withPivot(['amount', 'id']);
    }
}
