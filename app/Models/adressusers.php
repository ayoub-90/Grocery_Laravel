<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adressusers extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'Adress1',
        'Adress2',
        'City',
        'Zipecode',
        'defadrr',
    ];
    use HasFactory;
}
