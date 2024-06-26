<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['title', 'duration', 'rate', 'category_id', 'price', 'company', 'img'];
=======
    protected $fillable = ['title', 'duration', 'rating', 'category_id', 'price', 'company'];
>>>>>>> origin/master

    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }

}
