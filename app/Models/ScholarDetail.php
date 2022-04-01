<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarDetail extends Model
{
    use HasFactory;
	
	
    protected $fillable = [
        'scholar_tracker_id',
        'ronin_address',
        'today',
        'yesterday',
        'average',
        'adventure',
        'elo',
        'rank',
        'axies',
        'next_claim',
        'scholar',
        'manager',
        'total',
        'lifetime',
    ];
	
	public function scholar_tracker()
    {
        return $this->belongsTo(ScholarTracker::class,'id');
    }
}
