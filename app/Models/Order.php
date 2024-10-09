<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'kode_order',
        'ticket_id',
        'user_id',
        'qty',
        'total_harga',
        'tanggal_ticket',
        'metode_pembayaran',
        'status_pembayaran',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class,'ticket_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
