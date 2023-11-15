<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductCategory
 *
 * @property int $id
 * @property string $Name
 * @property int|null $ParentID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereUpdatedAt($value)
 * @property-read ProductCategory|null $Parent
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereParentID($value)
 * @mixin \Eloquent
 */
class ProductCategory extends Model
{
    protected $fillable = [
        'Name',
        'Icon',
        'ParentID'
    ];
    use HasFactory;

    public function Parent(){
        return $this->hasOne(ProductCategory::class , 'id' , 'ParentID');
    }

    public function Products(){
        return $this->hasMany(Product::class , 'CategoryID' ,  'id');
    }
}
