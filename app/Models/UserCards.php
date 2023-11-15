<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserCards
 *
 * @property int $id
 * @property int $UserID
 * @property string $CardNumber
 * @property string $ExpireDate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards whereCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCards whereUserID($value)
 * @mixin \Eloquent
 */
class UserCards extends Model
{
    protected $fillable = [
        'UserID',
        'CardNumber',
        'ExpireDate',
    ];
    use HasFactory;
}
