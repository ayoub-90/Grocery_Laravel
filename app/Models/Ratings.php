<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'prod_id',
        'headline',
        'Media',
        'Writen_review',
        'start_rated',
    ];
    public function produits()
    {
        return $this->belongsTo(produits::class);
    }
}
