<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; 
    protected $table = 'products';

    protected $fillable = [
        'nama',
        'deskripsi',
        'fitur',
        'latitude',
        'longtitude',
        'nomor_telepon',
        'harga',
        'slug',
    ];

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function images()
    {
        return $this->hasMany(ImageProduct::class);
    }


}
