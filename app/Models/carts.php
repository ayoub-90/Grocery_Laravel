<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $fillable = [
        'id_prod',
        'user_id',
        'qte',
        'price',
    ];
    use HasFactory;
}
