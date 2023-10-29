<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Farmer;
use App\Models\Seeker;

class Matching extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id1',
        'user_id2',
        'matching_status'
    ];

    public function user1()
    {
        return $this->belongsTo(Farmer::class, 'user_id1');
    }
    

    public function user2()
    {
        return $this->belongsTo(Seeker::class, 'user_id2');
    }
    
}
