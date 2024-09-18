<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'size', 'price', 'available', 'description', 'url_img'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserName()
    {
        return $this->user->name;
    }

    

}
