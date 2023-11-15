<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BlogComments
 *
 * @property int $id
 * @property int $PostID
 * @property int $UserID
 * @property string $Comment
 * @property int $isUseFull
 * @property int $notUseFull
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments whereIsUseFull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments whereNotUseFull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments wherePostID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComments whereUserID($value)
 * @mixin \Eloquent
 */
class BlogComments extends Model
{
    protected $fillable = [
        'PostID',
        'UserID',
        'Comment',
        'isUseFull',
        'notUseFull',
        '',
    ];
    use HasFactory;
}
