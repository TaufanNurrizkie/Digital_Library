<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketplaceProduct extends Model
{
    use HasFactory;

    protected $table = 'marketplace_product';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'stock',
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}

}

