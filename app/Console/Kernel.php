<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
	protected $commands = [
        Commands\MinuteUpdate::class,
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('minute:update')
                 ->everyMinute()->appendOutputTo(storage_path('logs/inspire.log'));
        /* $schedule->command('daily:battles')
                 ->twiceDaily(1, 13)->appendOutputTo(storage_path('logs/inspire.log'));
        $schedule->command('currency:converter')
                 ->everyMinute()->appendOutputTo(storage_path('logs/inspire.log'));
        $schedule->command('win:rate')
                 ->weeklyOn(1, '8:00')->appendOutputTo(storage_path('logs/inspire.log')); */
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
