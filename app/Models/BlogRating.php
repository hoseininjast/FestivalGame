<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogRating extends Model
{
    protected $fillable = [
        'PostID',
        'UserID',
        'Rating',
        '',
    ];
    use HasFactory;
}
