<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ScheduleCommand1Command extends Command
{
    protected $signature = 'app:schedule-command-1';

    protected $description = 'Command description';

    public function handle()
    {
        $this->comment('Running ScheduleCommand1Command');
    }
}
