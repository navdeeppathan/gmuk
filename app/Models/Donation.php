<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'amount',
        'message',
        'status',
        'payment_method',
        'transaction_id',
        'excel_file',
        'name',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}