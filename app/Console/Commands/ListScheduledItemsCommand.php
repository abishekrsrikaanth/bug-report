<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Str;
use Illuminate\Console\Scheduling\Schedule;

class ListScheduledItemsCommand extends Command
{
    protected $signature = 'app:list-scheduled-items';

    protected $description = 'Command description';

    /**
     * @return void
     * @throws BindingResolutionException
     */
    public function handle()
    {
        $schedule = app()->make(Schedule::class);
        $scheduledJobs = collect($schedule->events());
        dd([
            $scheduledJobs->pluck('command'),
            $scheduledJobs->count()
        ]);
    }
}
