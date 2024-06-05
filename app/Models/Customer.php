<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'date_of_birth', 'email', 'phone_number'];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
