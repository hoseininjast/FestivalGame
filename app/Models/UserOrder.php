<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserOrder
 *
 * @property int $id
 * @property int $UserID
 * @property int $AddressID
 * @property string $Products
 * @property string $FactorCode
 * @property int $TotalPrice
 * @property string $Status
 * @property string $Delivery
 * @property int $ShippingCost
 * @property string $DeliveryDate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereAddressID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereDeliveryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereFactorCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereProducts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereShippingCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrder whereUserID($value)
 * @mixin \Eloquent
 */
class UserOrder extends Model
{
    protected $fillable = [
        'UserID',
        'AddressID',
        'Products',
        'FactorCode',
        'TotalPrice',
        'Status',
        'Delivery',
        'ShippingCost',
        'DeliveryDate',
    ];
    use HasFactory;
}
