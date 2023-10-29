<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seeker extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'introduction',
        'background'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
