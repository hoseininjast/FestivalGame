<?php

namespace App\Models\SiteSettings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'Position',
        'Name',
        'ImageUrl',
        'LinkTo',
        'Link',
        '',
    ];
    use HasFactory;
}
