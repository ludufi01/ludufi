<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ScholarTracker;
use App\Models\DailySLP;
use App\Models\WinRate;

class DailyBattles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:battles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
		$scholar=ScholarTracker::get();
		foreach($scholar as $scholars)
		{
		if(!empty($scholars)) {
		$ronin=explode(':',$scholars->ronin_address);
		$roninSingle='0x'.$ronin[1];
		$url = 'https://game-api.axie.technology/logs/v2/pvp/'.$roninSingle;
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));
		$response = curl_exec($curl);
		curl_close($curl);
		
		$finalData['battles']=json_decode($response);
		if(isset($finalData['battles']->battles))
			{
			foreach($finalData['battles']->battles as $battles){
				if($battles->winner==$roninSingle || $battles->winner=="draw")
				{
					$date=explode('T',$battles->game_started);
					if(isset($battles->eloAndItem))	{
					foreach($battles->eloAndItem as $eloAndItem)
					{
						if($eloAndItem->player_id==$roninSingle)
						{
							if(isset($eloAndItem->_items[0]->amount))	{
							$amount=$eloAndItem->_items[0]->amount;
							}	else {	$amount=0;	}
							$SLP=DailySlp::where('battle_uuid',$battles->battle_uuid)->first();
							if(empty($SLP))	{
								DailySlp::create([
								  'battle_uuid' => $battles->battle_uuid,
								  'ronin' => $roninSingle,
								  'date' => $date[0],
								  'slp' => $amount,
							]);
							}
						}
					}	}
					$Rate=WinRate::where('battle_uuid',$battles->battle_uuid)->first();
					if(empty($Rate))	{
						if($battles->winner==$roninSingle){
							WinRate::create([
							'battle_uuid' => $battles->battle_uuid,
							'ronin' => $roninSingle,
							'type' => 'win',
							'date' => $date[0],
							]);
						}	else if($battles->winner=='draw')	{
							WinRate::create([
							'battle_uuid' => $battles->battle_uuid,
							'ronin' => $roninSingle,
							'type' => 'draw',
							'date' => $date[0],
							]);
						}
					}
				}	else {
					$date=explode('T',$battles->game_started);
					$Rate=WinRate::where('battle_uuid',$battles->battle_uuid)->first();
					if(empty($Rate))	{
						WinRate::create([
						'battle_uuid' => $battles->battle_uuid,
						'ronin' => $roninSingle,
						'type' => 'lose',
						'date' => $date[0],
						]);
				}	}
		}	}	}	}
		
		$this->info('Daily Battles updated successfully');
    }
}
