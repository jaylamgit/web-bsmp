<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Dymantic\InstagramFeed\Profile;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();


	// Instagram Feed Refresh
	$schedule->call(function() {
		Profile::where('username', 'blade.smp')->first()->refreshFeed(100);
	})->twiceDaily();

	// Instagram auth token refresh
	$schedule->command("instagram-feed:refresh-tokens")->monthlyOn(15,'03:00');

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
