<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
    'room_type',
    'photo',
    'room_number',
    'room_area',
    'minibar_available',
    'capacity',
    'bath_available',
    'price_per_night',
    ];
}
