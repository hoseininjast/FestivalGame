<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'Name',
        'Description',
        'Tags',
        'Views',
        'Image',
        'Status',
        'CategoryID',
        '',
    ];
    use HasFactory;
}
