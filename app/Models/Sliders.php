<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable = [
        'Name',
        'ImageUrl',
        'LinkTo',
        'Link',
        'Priority',
    ];
    use HasFactory;
}
