<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function presentPrice($prices ='')
    {
        if ($prices != '') {
            return money_format('$%i', $prices / 100);
        }
        return money_format('$%i', $this->price / 100);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
        // how to using
        // Product::mightAlsoLike()->get();
    }

    public function nhan2($price,$qty)
    {
        $price = $price * $qty;
        return $this->presentPrice($price);
    }
}
