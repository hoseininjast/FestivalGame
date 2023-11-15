<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserShoppingCard
 *
 * @property int $id
 * @property int $UserID
 * @property int $ProductID
 * @property int $Count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard whereProductID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserShoppingCard whereUserID($value)
 * @mixin \Eloquent
 */
class UserShoppingCard extends Model
{
    protected $fillable = [
        'UserID',
        'ProductID',
        'Count',
    ];
    use HasFactory;
}
