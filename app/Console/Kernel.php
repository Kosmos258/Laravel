<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
<<<<<<< HEAD
        $this->load(__DIR__.'/Commands');
=======
        $this->load(__DIR__ . '/Commands');
>>>>>>> 7b75587569b42e86effbccfce53afd8051535105

        require base_path('routes/console.php');
    }
}
