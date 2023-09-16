<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'Name',
        'Description',
        'Price',
        'PartnerPrice',
        'Discount',
        'MainImage',
        'Images',
        'Type',
        'Colors',
        'Options',
        'CategoryID',
        '',
    ];
    use HasFactory;
}
