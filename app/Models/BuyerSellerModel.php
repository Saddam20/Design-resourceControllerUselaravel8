<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerSellerModel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'buyer_seller_models';
    public $timestamps = true;

    protected $fillable = [
        'seller',
        'seller_phone',
        'buyer',
        'buyer_phone',
        'quantity',
        'price',
        'description',
        'created_at'
        
    ];
}
