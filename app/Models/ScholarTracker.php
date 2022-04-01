<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ScholarTracker extends Model
{
    use HasFactory;
	
	
    protected $fillable = [
        'name',
        'user_id',
        'ronin_address',
        'manager_percentage',
        'scholar_percentage',
        'scholar_ronin_address',
        'trainee_percentage',
        'trainee_ronin_address',
    ];
	
	public function getInformation($ronin){
        $info=DB::select('select name,ronin_address,manager_percentage from scholar_trackers where ronin_address="'.$ronin.'" ');
		return $info;
    }  
	
	public function scholar_detail()
    {
        return $this->hasOne(ScholarDetail::class, 'scholar_tracker_id');
    }
}
