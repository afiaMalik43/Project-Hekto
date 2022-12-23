<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'status', 'sub_total', 'shipping', 'total', 'email', 'name', 'address', 'apartment','city', 'country', 'postal_code',
    ];
}
