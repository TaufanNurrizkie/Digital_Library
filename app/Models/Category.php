<?php

namespace App\Models;

use App\Models\MarketplaceProduct;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function MarketplaceProduct()
    {
        return $this->hasMany(MarketplaceProduct::class);
    }
}
