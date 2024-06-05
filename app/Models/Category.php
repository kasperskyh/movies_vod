<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'age'];
<<<<<<< HEAD
    public $timestamps = false;

    public function movies()
=======

    public function movie()
>>>>>>> origin/master
    {
        return $this->hasMany(Movie::class);
    }
}
