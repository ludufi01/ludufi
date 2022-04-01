<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySlp extends Model
{
    use HasFactory;
	
    protected $fillable = [
        'battle_uuid',
        'ronin',
        'date',
        'slp',
    ];
}
