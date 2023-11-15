<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BlogRating
 *
 * @property int $id
 * @property int $PostID
 * @property int $UserID
 * @property int $Rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating wherePostID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogRating whereUserID($value)
 * @mixin \Eloquent
 */
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
