<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static orderBy(string $string, string $string1)
 * @method static find($id)
 */
class Cart_Item extends Model
{
    protected $table='carts_items';
    protected $fillable=['cart_id','product_id','count'];



}
