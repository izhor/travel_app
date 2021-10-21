<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'Hotels';
    protected $fillable = [
        'user_id',
        'region',
        'hotel',
        'check_in',
        'stays',
        'code'
        
    ];
}
