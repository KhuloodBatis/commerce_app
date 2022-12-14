<?php

namespace App\Models;

use Cknow\Money\Money;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function formattedPrice()
    {

        return money($this->price);
    }


    public function variation(): HasMany
    {
        return $this->hasMany(Variation::class);
    }
}
