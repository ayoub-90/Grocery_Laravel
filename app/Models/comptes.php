<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comptes extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'Username',
        'Email',
        'Password',
        'Adresse',
        'Telephone',
        'NombreOrdres',
        'NomMagasin',
        'Photo',
        'Role_as',

    ];
}
