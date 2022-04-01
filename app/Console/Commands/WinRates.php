<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\WinRate;
use App\Models\WinPercentage;

class WinRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'win:rate';

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
		$winRate=WinRate::selectRaw("count(CASE WHEN (type = 'win') THEN 1 ELSE NULL END) as wincount,count(CASE WHEN (type = 'lose') THEN 1 ELSE NULL END) as losecount,count(id) as cnt,ronin")
		->where('date','<',date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d')))))
		->groupBy('ronin')
		->get();
		foreach($winRate as $rate)
		{
			$check=WinPercentage::where('ronin',$rate->ronin)->first();
			if(empty($check))
			{
				WinPercentage::create([
					  'ronin' => $rate->ronin,
					  'wins' => $rate->wincount,
					  'loses' => $rate->losecount,
					  'total' => $rate->cnt,
				]);
			}	else {
				$check->wins=$check->wins+$rate->wincount;
				$check->loses=$check->loses+$rate->losecount;
				$check->total=$check->total+$rate->cnt;
				$check->save();
			}
			WinRate::where('ronin',$rate->ronin)->where('date','<',date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d')))))->delete();
		}
		$this->info('Rate Table updated successfully');
    }
}
