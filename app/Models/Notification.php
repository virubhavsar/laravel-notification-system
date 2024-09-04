<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'content',
        'is_read',
        'expiration',
    ];

    protected $casts = [
        'expiration' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
