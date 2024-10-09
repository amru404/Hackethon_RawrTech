<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = [
        'product_id',
        'stock',
        'tanggal',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
