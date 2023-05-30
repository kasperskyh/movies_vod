<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
use App\Models\Customer;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'customer_id', 'price', 'date'];

    public $timestamps = false;

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
