<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getPrice()
    {
        $price = $this->price;
        return number_format($price,0,'',' ') .' FCFA';
    }
}
