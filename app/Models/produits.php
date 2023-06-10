<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{

    use HasFactory;
    protected $fillable=[
        'idc_cat',
        'Name',
        'weight',
        'Utnits',
        'proPhoto',
        'Description',
        'Instock',
        'Codeprod',
        'CodeSku',
        'status',
        'Regular_price',
        'Sale_price',
        'meta_title',
        'meta_description',
    ];
    public function Ratings()
{
    return $this->hasMany(Ratings::class);
}
}
