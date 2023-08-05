<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoryPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'money',
        'type',
        'status',
    ];

    /**
     * Get the user that owns the payments.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
