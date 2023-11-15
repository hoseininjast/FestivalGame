<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserFavorite
 *
 * @property int $id
 * @property int $UserID
 * @property int $ProductID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereProductID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserFavorite whereUserID($value)
 * @mixin \Eloquent
 */
class UserFavorite extends Model
{
    protected $fillable = [
        'UserID',
        'ProductID',
    ];
    use HasFactory;
}
