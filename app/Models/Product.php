<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $ProductID
 * @property string $Name
 * @property string $Description
 * @property float $Price
 * @property float $PartnerPrice
 * @property float|null $Discount
 * @property string $MainImage
 * @property string $Images
 * @property string $Type
 * @property string $Status
 * @property string $Brand
 * @property int $Count
 * @property string|null $Colors
 * @property string|null $Options
 * @property int $CategoryID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereColors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMainImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePartnerPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    protected $fillable = [
        'ProductID',
        'Name',
        'Brand',
        'Price',
        'PartnerPrice',
        'Discount',
        'Count',
        'Type',
        'Status',
        'Colors',
        'Options',
        'Amazing',
        'Recommended',
        'Description',
        'CategoryID',
        'SubCategoryID',
        'MainImage',
        'Images',
    ];
    use HasFactory;


    public function Category()
    {
        return $this->hasOne(ProductCategory::class , 'id' , 'CategoryID');
    }


    public function SubCategory()
    {
        return $this->hasOne(ProductCategory::class , 'id' , 'SubCategoryID');
    }

    public function GetPrice()
    {
        return $this->Price - ($this->Price * ($this->Discount / 100));
    }


}
