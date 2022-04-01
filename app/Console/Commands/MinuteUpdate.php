<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Mail;

class MinuteUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

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
		$user=User::where('notification',1)->get();
		if(!empty($user))	{
			foreach($user as $usr)	{
				$roninDetail=DB::select("SELECT a1.name,a1.ronin_address FROM scholar_trackers a1 left join daily_slps a2 on SUBSTRING_INDEX(a1.ronin_address,':',-1)=SUBSTRING_INDEX(a2.ronin,'x',-1) and a2.date='".date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))))."'  inner join users a3 on a1.user_id=a3.id where a2.ronin is null and a3.id='".$usr->id."'");
				Mail::send('notification.notify', ['data' => $roninDetail], function($message) use ($usr) {
					  $message->from('ishal.s12345@gmail.com', 'Ludufi');
					  $message->to($usr->email);
					  //$message->to('info@ludufi.io');
					  //$message->to('rana.h10111992@gmail.com');
					  $message->subject('Notification');
				   });
			}
			$this->info('Minute Update send successfully');
		}
	}
}
