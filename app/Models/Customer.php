<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'firstname',
        'lastname',
        'checkin_date',
        'checkout_date',
        'room_type',
        'room_number'
    ];

    protected $casts = [
        'checkin_date' => 'date',
        'checkout_date' => 'date'
    ];
}
