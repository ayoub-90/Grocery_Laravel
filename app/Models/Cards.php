<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    protected $fillable=[
            'user_id',
            'Payement',
            'Nameoncard',
            'Month',
            'Year',
            'Cardnumber',
            'Cvv',
    ];
    use HasFactory;
}
