<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Cart extends Model
{

    protected $fillable=['user_id','address'];
    protected $attributes=['status'=>1];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,'carts_items');
    }
}
