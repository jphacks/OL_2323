<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_path',
        'introduction'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }




}
