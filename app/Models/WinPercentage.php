<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WinPercentage extends Model
{
    use HasFactory;
	
    protected $fillable = [
        'ronin',
        'wins',
        'loses',
        'total',
    ];
}
