<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable=[
        'user_id',
        'id_address',
        'instructions',
        'id_payment',
        'id_prod',
        'prix_total',
    ];
    use HasFactory;
}
