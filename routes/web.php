<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $schedule = app()->make(Schedule::class);
    $scheduledJobs = collect($schedule->events());
    dd([
        $scheduledJobs->pluck('command'),
        $scheduledJobs->count()
    ]);
});
