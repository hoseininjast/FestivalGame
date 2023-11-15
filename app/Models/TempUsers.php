<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TempUsers
 *
 * @property int $id
 * @property string $PhoneNumber
 * @property string $VerificationCode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TempUsers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TempUsers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TempUsers query()
 * @method static \Illuminate\Database\Eloquent\Builder|TempUsers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TempUsers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TempUsers wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TempUsers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TempUsers whereVerificationCode($value)
 * @mixin \Eloquent
 */
class TempUsers extends Model
{
    protected $fillable = [
        'PhoneNumber',
        'VerificationCode',
    ];
    use HasFactory;
}
