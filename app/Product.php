<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static orderBy(string $string, string $string1)
 * @method static search($key)
 */
class Product extends Model
{
    protected $fillable=['name','description','image','price','status'];

    public function carts()
    {
        return $this->belongsToMany(Cart::class,'carts_items');
    }

    public function scopeSearch($query , $keyword)
    {
        $query->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('description', 'LIKE', '%' . $keyword . '%');
        return $query;
    }
}


