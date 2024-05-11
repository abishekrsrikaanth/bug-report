<?php

use App\Console\Commands\ScheduleCommand1Command;
use App\Console\Commands\ScheduleCommand2Command;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command(ScheduleCommand1Command::class)->everyMinute();
Schedule::command(ScheduleCommand2Command::class)->everyMinute();
