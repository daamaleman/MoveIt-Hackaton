<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyLike extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getProductName()
    {
        return $this->product->name;
    }

    public function getUserName()
    {
        return $this->user->name;
    }
    
}
